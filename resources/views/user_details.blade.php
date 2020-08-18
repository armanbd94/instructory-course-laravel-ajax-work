<div class="col-md-12 text-center">
    @if (!empty($data->avatar))
    <img src="{{asset('storage/'.USER_AVATAR.$data->avatar)}}" alt="{{$data->name}}" style="width:250px;"/>
    @else
    <img src="{{asset('svg/user.svg')}}" alt="Default Image"  style="width:250px;">
    @endif
    
</div>
<div class="col-md-12">
    <table class="table table-borderless">
        <tr>
            <td><b>Name:</b></td>
            <td>{{$data->name}}</td>
        </tr>
        <tr>
            <td><b>Role:</b></td>
            <td>{{$data->role->role_name}}</td>
        </tr>
        <tr>
            <td><b>Email:</b></td>
            <td>{{$data->email}}</td>
        </tr>
        <tr>
            <td><b>Mobile No:</b></td>
            <td>{{$data->mobile_no}}</td>
        </tr>
        <tr>
            <td><b>Email Verified:</b></td>
            <td>
                @if (!empty($data->email_verified_at))
                <span class="badge badge-pill badge-success">Verified</span>
                @else
                <span class="badge badge-pill badge-danger">Unverified</span>
                @endif
            </td>
        </tr>
        <tr>
            <td><b>Status:</b></td>
            <td>{!! STATUS[$data->status] !!}</td>
        </tr>
        <tr>
            <td><b>District:</b></td>
            <td>{{$data->district->location_name}}</td>
        </tr>
        <tr>
            <td><b>Upazila:</b></td>
            <td>{{$data->upazila->location_name}}</td>
        </tr>
        <tr>
            <td><b>Postal Code:</b></td>
            <td>{{$data->postal_code}}</td>
        </tr>
        <tr>
            <td><b>Address:</b></td>
            <td>{{$data->address}}</td>
        </tr>
    </table>
</div>