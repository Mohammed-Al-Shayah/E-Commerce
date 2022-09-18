<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        return view('site.index');
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
