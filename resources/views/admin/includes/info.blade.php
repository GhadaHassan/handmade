@if(session('info'))
<div class="alert alert-success">
  {{session('info')}}
</div>
@endif

<!-- @if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif -->


@if(session('alert'))
<div class="alert alert-danger">
  {{session('alert')}}
</div>
@endif