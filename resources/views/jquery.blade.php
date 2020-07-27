@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <div class="title m-b-md" id="heading">
                        Laravel
                    </div>
                    <button type="button" id="change-text">Click</button>
                </div>
                <div id="image"></div>

                <form method="post">
                    <input type="text" name="name" id="name" class="form-control">
                    <button type="button" class="btn btn-primary save-btn">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

@push('script')
<script>
$(document).ready(function(){
    load_image();

    $('#change-text').click(function(){
        $.get("{{route('jquery.ajax.get')}}", function(data, status){
            if(data)
            {
                $("#heading").html(data);
                console.log(status);
            }
        });
    });

    $('.save-btn').click(function(){
        let name = $('#name').val();
        let _token = "{{csrf_token()}}";
        $.post("{{route('jquery.ajax.post')}}", {
            name: name,_token:_token

        },function(data, status){
            if(data)
            {
                $("#heading").text(data);
                console.log(status);
            }
        });
    });


    function load_image(){
        $.get("{{route('jquery.ajax.image')}}", function(data, status){
            if(data)
            {
                $("#image").html(data);
                console.log(status);
            }
        });
    }

    
});




</script>
@endpush