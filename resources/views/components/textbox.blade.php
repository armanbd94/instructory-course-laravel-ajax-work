<div class="form-group {{$col ?? ''}} {{$required ?? ''}}" >
    <label for="{{$name}}">{{$labelName}}</label>
    <input type="{{$type ?? 'text'}}" name="{{$name}}" id="{{$name}}" class="form-control {{$class ?? ''}}" placeholder="{{$placeholder ?? ''}}">
</div>
