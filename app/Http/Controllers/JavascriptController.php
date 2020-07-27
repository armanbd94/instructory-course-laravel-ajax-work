<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contracts\DemoContract;
class JavascriptController extends Controller
{

    protected $demo;

    public function __construct(DemoContract $demo)
    {
        $this->demo = $demo;
    }

    public function index()
    {
        return view('javascript');
    }

    public function ajax_get()
    {
        $text = '<h2>Laravel + Ajax</h2>';
    return response($text);
    }
    public function ajax_post(Request $request)
    {  
        $output = $this->demo->ajax_post($request);
        return response($request->name);
    }

    public function ajax_get_image()
    {
        $image = "<img src='https://image.shutterstock.com/image-photo/beautiful-pink-flower-anemones-fresh-260nw-1028135845.jpg' 
        alt='' style='width:200px'/>";
        return response($image);
    }
}
