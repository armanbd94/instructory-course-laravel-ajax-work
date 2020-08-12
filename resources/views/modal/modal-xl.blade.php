<div class="modal" id="saveDataModal" tabindex="-1">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <x-textbox labelName="Name" name="name" required="required" col="col-md-12" placeholder="Enter name"/>
                        <x-textbox type="email" labelName="Email" name="email" required="required" col="col-md-12" placeholder="Enter email"/>
                        <x-textbox labelName="Mobile No" name="mobile_no" required="required" col="col-md-12" placeholder="Enter mobile no"/>
                        <x-selectbox  labelName="Role" name="role_id" required="required" col="col-md-12">
                            @if (!$data['roles']->isEmpty())
                                @foreach ($data['roles'] as $role)
                                    <option value="{{$role->id}}">{{$role->role_name}}</option>
                                @endforeach
                            @endif
                        </x-selectbox>
                        <x-selectbox  onchange="upazilaList(this.value)" labelName="District" name="district_id" required="required" col="col-md-12">
                            @if (!$data['districts']->isEmpty())
                                @foreach ($data['districts'] as $district)
                                    <option value="{{$district->id}}">{{$district->location_name}}</option>
                                @endforeach
                            @endif
                        </x-selectbox>
                        <x-selectbox  labelName="Upazila" name="upazila_id" required="required" col="col-md-12"/>
                    
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" id="save-btn"></button>
                </div>
            </form>
        </div>
    </div>
</div>
