@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                            User List
                        </div>
                        <div class="col-md-6">
                            <button class="btn btn-sm btn-primary float-right" onclick="showModal('Add New User','Save')">Add New</button>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table class="table table-bordered">
                        <thead>
                            <th>SL</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Role</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>District</th>
                            <th>Upazila</th>
                            <th>Postal Code</th>
                            <th>Verified Email</th>
                            <th>Status</th>
                            <th>Action</th>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@include('modal.modal-xl')
@endsection

@push('script')
<script>
   
    function showModal(title,btnText){
        $('#saveDataModal').modal(
            {keyboard:false,
            backdrop:'static',}
        );
        $('#saveDataModal .modal-title').text(title);
        $('#saveDataModal #save-btn').text(btnText);
    }

    function upazilaList(district_id){
        if(district_id){
            $.ajax({
                url:"{{route('upazila.list')}}",
                type:"POST",
                data:{district_id:district_id,_token:_token},
                dataType:"JSON",
                success: function(data){
                    $('#upazila_id').html('');
                    $('#upazila_id').html(data);
                },
                error: function(xhr, ajaxOption, thrownError){
                    console.log(thrownError+'\r\n'+xhr.statusText+'\r\n'+xhr.responseText);
                }
            });
        }
    }

</script>
@endpush
