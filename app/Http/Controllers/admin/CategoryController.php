<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories=Category::with('parent')->orderByDesc('id')->paginate(5);
        return view('admin.categories.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Category::all();
        return view('admin.categories.create',compact('categories'));
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
            'perant_id' =>'nullable |exists:categories,id',
        ]);

        //convert name to json
        $name=json_encode([
            'en'=>$request->name_en,
            'ar'=>$request->name_ar,
            ],JSON_UNESCAPED_UNICODE);

        //Upload file
        $img_name=rand().time().$request->file('image')->getClientOriginalName();
        $request->file('image')->move(public_path('uploads/categories/'),$img_name);

        // insert To database
         Category::create([
            'name'=>$name,
            'image'=>$img_name,
            'perant_id'=>$request->perant_id,
         ]);
        //redirect

        return redirect()->route('admin.categories.index')->with('msg','Category Created Successfuly')->with('type','success');

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
        $categories=Category::all();
        $category=Category::findOrFail($id);
        return view('admin.categories.edit',compact('categories','category'));
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
            'perant_id' =>'nullable |exists:categories,id',
        ]);

        $name=json_encode([
            'en'=>$request->name_en,
            'ar'=>$request->name_ar,
            ],JSON_UNESCAPED_UNICODE);


        $category=Category::findOrFail($id);
        //Upload file
        $img_name=$category->image;
        if($request->hasFile('image')){
            $img_name=rand().time().$request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('uploads/categories/'),$img_name);
        }

        // insert To database
         $category->update([
            'name'=>$name,
            'image'=>$img_name,
            'perant_id'=>$request->perant_id,
         ]);
        //redirect

        return redirect()->route('admin.categories.index')->with('msg','Category Updated Successfuly')->with('type','info');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category=Category::findOrFail($id);
        File::delete(public_path('uploads/categories/'.$category->image));
        $category->children()->update(['perant_id'=> null]);
        $category->delete();

        return redirect()->route('admin.categories.index')->with('msg','Category deleted Successfuly')->with('type','danger');
    }
}
