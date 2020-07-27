<?php
namespace App\Contracts;
use App\Http\Requests\DemoRequest;
interface DemoContract{
    public function ajax_post(DemoRequest $request);
}