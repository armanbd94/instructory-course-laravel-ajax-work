<div class="form-group {{$col ?? ''}} {{$required ?? ''}}" >
    <label for="{{$name}}">{{$labelName}}</label>
    <textarea name="{{$name}}" id="{{$name}}" class="form-control {{$name ?? ''}}"
     placeholder="{{$placeholder ?? ''}}"></textarea>
</div>