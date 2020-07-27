<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JqueryController extends Controller
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
        $image = "<img src='https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885__340.jpg' 
        alt='' style='width:200px'/>";
        return response($image);
    }
}
