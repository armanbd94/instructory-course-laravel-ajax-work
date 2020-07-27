<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JavascriptController extends Controller
{
    public function index()
    {
        return view('jquery');
    }

    public function ajax_get()
    {
        $text = '<h2>Laravel + Ajax</h2>';
        return response($text);
    }
    public function ajax_post(Request $request)
    {  
        return response($request->name);
    }

    public function ajax_get_image()
    {
        $image = "<img src='https://image.shutterstock.com/image-photo/beautiful-pink-flower-anemones-fresh-260nw-1028135845.jpg' 
        alt='' style='width:200px'/>";
        return response($image);
    }
}
