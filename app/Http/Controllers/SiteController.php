<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Slider;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        $slider=Slider::orderByDesc('id')->take(3)->get();
        $categories=Category::orderByDesc('id')->take(3)->get();
        $products=product::orderByDesc('id')->get()->take(12);
        return view('site.index',compact('slider','categories','products'));
    }

    public function categories ()
    {
        return view('site.categories');

    }

    public function product ()
    {
        return view('site.product');

    }

    public function cart ()
    {
        return view('site.cart');

    }

    public function checkOut ()
    {
        return view('site.checkOut');

    }

    public function contact ()
    {
        return view('site.contact');

    }
}
