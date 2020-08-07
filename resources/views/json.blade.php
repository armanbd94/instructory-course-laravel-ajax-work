@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <div class="title m-b-md" id="heading">
                        JSON
                    </div>
                    <div id="data"></div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@push('script')
<script>
let customers = [
    {
        "name": "Mr. A",
        "email": "a@mail.com"
    },
    {
        "name": "Mr. B",
        "email": "b@mail.com"
    },
    {
        "name": "Mr. C",
        "email": "c@mail.com"
    }
];
console.log(JSON.stringify(customers));
// let converted = JSON.parse(customers);
// console.log(JSON.parse(customers));
// let html = '<ul>';
// $.each(converted , function(key,value){
//     html += '<li>'+value.name+'<br>'+value.email+'</li>';
// });

// html += '</ul>';

// $('#data').append(html);
</script>
@endpush