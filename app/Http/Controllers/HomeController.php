<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserFormRequest;
use App\Location;
use App\Role;
use App\Traits\Uploadable;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    use Uploadable;
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
        $data['districts'] = Location::where('parent_id', 0)->orderBy('location_name', 'asc')->get();
        return view('home', compact('data'));
    }

    public function userList(Request $request)
    {
        if ($request->ajax()) {
            $user = new User();

            if (!empty($request->name)) {
                $user->setName($request->name);
            }
            if (!empty($request->email)) {
                $user->setEmail($request->email);
            }
            if (!empty($request->mobile_no)) {
                $user->setMobileNo($request->mobile_no);
            }
            if (!empty($request->role_id)) {
                $user->setRoleID($request->role_id);
            }
            if (!empty($request->district_id)) {
                $user->setDistrictID($request->district_id);
            }
            if (!empty($request->upazila_id)) {
                $user->setUpazilaID($request->upazila_id);
            }
            if (!empty($request->status)) {
                $user->setStatus($request->status);
            }

            $user->setOrderValue($request->input('order.0.column'));
            $user->setDirValue($request->input('order.0.dir'));
            $user->setLengthValue($request->input('length'));
            $user->setStartValue($request->input('start'));

            $list = $user->getList();

            $data = [];
            $no = $request->input('start');
            foreach ($list as $value) {
                $no++;
                $action = '';
                $action .= ' <a class="dropdown-item edit_data" data-id="' . $value->id . '"><i class="fas fa-edit text-primary"></i> Edit</a>';
                $action .= ' <a class="dropdown-item view_data"  data-id="' . $value->id . '"><i class="fas fa-eye text-warning"></i> View</a>';
                $action .= ' <a class="dropdown-item delete_data"  data-id="' . $value->id . '" data-name="' . $value->name . '"><i class="fas fa-trash text-danger"></i> Delete</a>';

                $btngroup = '<div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-th-list"></i>
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                ' . $action . '
                </div>
              </div>';

                $row = [];
                $row[] = $no;
                $row[] = $this->avatar($value->avatar, $value->name);
                $row[] = $value->name;
                $row[] = $value->role->role_name;
                $row[] = $value->email;
                $row[] = $value->mobile_no;
                $row[] = $value->district->location_name;
                $row[] = $value->upazila->location_name;
                $row[] = $value->postal_code;
                $row[] = $value->email_verified_at ? '<span class="badge badge-pill badge-success">Verified</span>' : '<span class="badge badge-pill badge-danger">Unverified</span>';
                $row[] = STATUS[$value->status];
                $row[] = $btngroup;
                $data[] = $row;
            }
            $output = array(
                "draw" => $request->input('draw'),
                "recordsTotal" => $user->count_all(),
                "recordsFiltered" => $user->count_filtered(),
                "data" => $data,
            );

            echo json_encode($output);
        }
    }

    private function avatar($avatar = null, $name)
    {
        return !empty($avatar) ? '<img src="' . asset("storage/" . USER_AVATAR . $avatar) . '" alt="' . $name . '" style="width:60px;"/>' : '<img style="width:60px;" src="' . asset("svg/user.svg") . '" alt="User Avatar"/>';
    }

    public function store(UserFormRequest $request)
    {
        $data = $request->validated();
        $collection = collect($data)->except(['avatar', 'password_confirmation']);
        if ($request->file('avatar')) {
            $avatar = $this->upload_file($request->file('avatar'), USER_AVATAR);
            $collection = $collection->merge(compact('avatar'));
            if (!empty($request->old_avatar)) {
                $this->delete_file($request->old_avatar, USER_AVATAR);
            }
        }
        $result = User::updateOrCreate(['id' => $request->update_id], $collection->all());
        if ($result) {
            $output = ['status' => 'success', 'message' => 'Data has been saved successfully'];
        } else {
            if (!empty($avatar)) {
                $this->delete_file($avatar, USER_AVATAR);
            }

            $output = ['status' => 'error', 'message' => 'Data cannot save'];
        }
        return response()->json($output);
    }

    public function show(Request $request)
    {
        if ($request->ajax()) {
            $data = User::with(['role:id,role_name', 'district:id,location_name',
                'upazila:id,location_name'])->find($request->id);
            if ($data) {
                $output['user_view'] = view('user_details', compact('data'))->render();
                $output['name'] = $data->name;
            } else {
                $output['user_view'] = '';
                $output['name'] = '';
            }
            return response()->json($output);
        }
    }

    public function edit(Request $request)
    {
        if ($request->ajax()) {
            $data = User::toBase()->find($request->id);
            if ($data) {
                $output['user'] = $data;
            } else {
                $output['user'] = '';
            }
            return response()->json($output);
        }
    }

    public function destroy(Request $request)
    {
        if ($request->ajax()) {
            $data = User::find($request->id);
            if ($data) {
                $avatar = $data->avatar;
                if ($data->delete()) {
                    if (!empty($avatar)) {
                        $this->delete_file($avatar, USER_AVATAR);
                    }
                    $output = ['status' => 'success', 'message' => 'Data deleted successfully'];
                } else {
                    $output = ['status' => 'error', 'message' => 'Data cannot delete!'];
                }
            } else {
                $output = ['status' => 'error', 'message' => 'Data cannot delete!'];
            }
            return response()->json($output);
        }
    }

    public function upazilaList(Request $request)
    {
        if ($request->ajax()) {
            if ($request->district_id) {
                $output = '<option value="">Select Please</option>';
                $upazilas = Location::where('parent_id', $request->district_id)->orderBy('location_name', 'asc')->get();
                if (!$upazilas->isEmpty()) {
                    foreach ($upazilas as $value) {
                        $output .= '<option value="' . $value->id . '">' . $value->location_name . '</option>';
                    }
                }
                return response()->json($output);
            }
        }
    }
}
