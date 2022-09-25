<?php

namespace App\Http\Controllers\admin;

use App\Models\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class SliderController extends Controller
{

        /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function index()
        {
            $sliders=Slider::orderByDesc('id')->paginate(5);
            return view('admin.sliders.index',compact('sliders'));
        }

        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function create()
        {
            $sliders=Slider::all();
            return view('admin.sliders.create',compact('sliders'));
        }

        /**
         * Store a newly created resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @return \Illuminate\Http\Response
         */
        public function store(Request $request)
        {
            // dd($request->all());
            //valdite
            $request->validate([
                'name_en' =>'required',
                'name_ar' =>'required',
                'image' =>'required',
                'title' =>'required',
                'sub_title' =>'required',
            ]);

            //convert name to json
            $name=json_encode([
                'en'=>$request->name_en,
                'ar'=>$request->name_ar,
                ],JSON_UNESCAPED_UNICODE);

            //Upload file
            $img_name=rand().time().$request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('uploads/sliders/'),$img_name);

            // insert To database
             Slider::create([
                'name'=>$name,
                'image'=>$img_name,
                'title'=>$request->title,
                'sub_title'=>$request->sub_title,

            ]);
            //redirect

            return redirect()->route('admin.slider.index')->with('msg','Slider Created Successfuly')->with('type','success');

        }

        /**
         * Display the specified resource.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function show($id)
        {
            //
        }

        /**
         * Show the form for editing the specified resource.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function edit($id)
        {
            $sliders=Slider::all();
            $slider=Slider::findOrFail($id);
            return view('admin.sliders.edit',compact('sliders','slider'));
        }

        /**
         * Update the specified resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function update(Request $request, $id)
        {
             //valdite
             $request->validate([
                'name_en' =>'required',
                'name_ar' =>'required',
                'title'=>'required',
                'sub_title'=>'required',
            ]);

            $name=json_encode([
                'en'=>$request->name_en,
                'ar'=>$request->name_ar,
                ],JSON_UNESCAPED_UNICODE);


            $slider=Slider::findOrFail($id);
            //Upload file
            $img_name=$slider->image;
            if($request->hasFile('image')){
                $img_name=rand().time().$request->file('image')->getClientOriginalName();
                $request->file('image')->move(public_path('uploads/sliders/'),$img_name);
            }

            // insert To database
             $slider->update([
                'name'=>$name,
                'image'=>$img_name,
                'title'=>$request->title,
                'sub_title'=>$request->sub_title,
             ]);
            //redirect

            return redirect()->route('admin.slider.index')->with('msg','Slider Updated Successfuly')->with('type','info');

        }

        /**
         * Remove the specified resource from storage.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function destroy($id)
        {
            $slider=Slider::findOrFail($id);
            File::delete(public_path('uploads/sliders/'.$slider->image));
            $slider->delete();

            return redirect()->route('admin.slider.index')->with('msg','Slider deleted Successfuly')->with('type','danger');
        }
    }

