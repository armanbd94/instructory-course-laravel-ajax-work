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
                    <button type="button" onclick="changeText()">Click</button>
                </div>
                <div id="image"></div>

                <form method="post">
                    <input type="text" name="name" id="name" class="form-control">
                    <button type="button" class="btn btn-primary" onclick="ajaxPost()">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

@push('script')
<script>
    get_image();
    function changeText(){
        let req = new XMLHttpRequest();
        req.open('GET','{{route("ajax.get")}}',true);
        req.send();

        req.onreadystatechange = function(){
            console.log(req);
            if(req.readyState == 4 && req.status == 200){
                document.getElementById('heading').innerHTML = req.responseText;
            }
        }
    }
    function ajaxPost(){
        let name = document.getElementById('name').value;
        // if(name){
            let req = new XMLHttpRequest();
            req.open('POST','{{route("ajax.post")}}',true);
            req.setRequestHeader("Content-type","application/x-www-form-urlencoded");
            req.send('name='+name+'&_token={{ csrf_token() }}');

            req.onreadystatechange = function(){
                console.log(req);
                if(req.readyState == 4 && req.status == 200){
                    document.getElementById('heading').innerHTML = req.responseText;
                }
            // }
        }
       
    }
    function get_image() {
        let req = new XMLHttpRequest();
        req.open('GET','{{url("image")}}',true);
        req.send();

        req.onreadystatechange = function(){
            console.log(req);
            if(req.readyState == 4 && req.status == 200){
                document.getElementById('image').innerHTML = req.response;
            }
        }

    }



</script>
@endpush