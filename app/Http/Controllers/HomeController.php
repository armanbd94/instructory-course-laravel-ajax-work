<?php

namespace App\Http\Controllers;

use App\Role;
use App\User;
use App\Location;
use Illuminate\Http\Request;
use App\Http\Requests\UserFormRequest;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data['roles'] = Role::all();
        $data['districts'] = Location::where('parent_id',0)->orderBy('location_name','asc')->get();
        return view('home',compact('data'));
    }

    public function store(UserFormRequest $request){
        $data = $request->validated();
        $result = User::updateOrCreate(['id'=>$request->update_id],$data);
        if($result){
            $output = ['status' => 'success', 'message'=>'Data has been saved successfully'];
        }else{
            $output = ['status' => 'success', 'message'=>'Data cannot save'];
        }
        return response()->json($output);
    }


    public function upazilaList(Request $request)
    {
        if($request->ajax()){
            if($request->district_id){
                $output = '<option value="">Select Please</option>';
                $upazilas = Location::where('parent_id',$request->district_id)->orderBy('location_name','asc')->get();
                if(!$upazilas->isEmpty()){
                    foreach ($upazilas as $value) {
                        $output .= '<option value="'.$value->id.'">'.$value->location_name.'</option>';
                    }
                }
                return response()->json($output);
            }
        }
    }
}
