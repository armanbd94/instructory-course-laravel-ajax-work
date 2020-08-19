<div class="modal" id="saveDataModal" tabindex="-1">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" id="storeForm" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="update_id" id="update_id">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <span class="text-danger">All (*) mark fields are required.</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-8">
                            <x-textbox labelName="Name" name="name" required="required" col="col-md-12" placeholder="Enter name"/>
                            <x-textbox type="email" labelName="Email" name="email" required="required" col="col-md-12" placeholder="Enter email"/>
                            <x-textbox labelName="Mobile No" name="mobile_no" required="required" col="col-md-12" placeholder="Enter mobile no"/>
                            <x-textbox type="password" labelName="Password" name="password" required="required" col="col-md-12" placeholder="Enter password"/>
                            <x-textbox type="password" labelName="Confirm Password" name="password_confirmation" required="required" col="col-md-12" placeholder="Enter password again"/>
                            
                            <x-selectbox  onchange="upazilaList(this.value,'storeForm')" labelName="District" name="district_id" required="required" col="col-md-12">
                                @if (!$data['districts']->isEmpty())
                                    @foreach ($data['districts'] as $district)
                                        <option value="{{$district->id}}">{{$district->location_name}}</option>
                                    @endforeach
                                @endif
                            </x-selectbox>
                            <x-selectbox  labelName="Upazila" name="upazila_id" required="required" col="col-md-12"/>
                            <x-textbox labelName="Postal Code" name="postal_code" required="required" col="col-md-12" placeholder="Enter postal code"/>
                            <x-textarea labelName="Address" name="address" required="required" col="col-md-12" placeholder="Enter address"/>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group col-md-12">
                                <input type="file" class="dropify" name="avatar" id="avatar" data-show-errors="true" data-errors-position="outside"
                                data-allowed-file-extensions="jpg jpeg png svg webp gif">
                                <input type="hidden" name="old_avatar" id="old_avatar">
                            </div>
                            <x-selectbox  labelName="Role" name="role_id" required="required" col="col-md-12">
                                @if (!$data['roles']->isEmpty())
                                    @foreach ($data['roles'] as $role)
                                        <option value="{{$role->id}}">{{$role->role_name}}</option>
                                    @endforeach
                                @endif
                            </x-selectbox>
                        </div>
                        
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="save-btn"></button>
                </div>
            </form>
        </div>
    </div>
</div>
