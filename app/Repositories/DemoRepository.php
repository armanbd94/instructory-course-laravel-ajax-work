<?php
namespace App\Repositories;

use App\Contracts\DemoContract;
use App\Http\Requests\DemoRequest;

class DemoRepository implements DemoContract{

    public function ajax_post(DemoRequest $request)
    {
        return 'ok';
    }
}