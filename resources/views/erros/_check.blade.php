@if($errors->any())
    <ul class="alert">
        @foreach($errors->all() as $error)
            <li>{!! $error !!}</li>
        @endforeach
    </ul>

@endif

@if(Session::has('success'))
    <div class="alert alert-success">
        <a class="close" data-dismiss="alert">×</a>
        {!!Session::get('success')!!}
    </div>
@endif