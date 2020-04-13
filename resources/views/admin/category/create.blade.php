@extends('admin.includes.main_admin')
@section('title','New Category')
@section('content')

<div class="container">
    <div class="row">
        @include('admin.includes.sidebar_admin')
         <div class="col-md-9">
              <div class="panel panel-primary">
      <div class="panel-heading">Create New Category</div>
      <div class="panel-body">

        <form action="{{route('category.store')}}" method="POST">
          {{csrf_field()}}
          <div class="form-group">
            <label fae="Titel">Name: </lable>
            <input type="text" name="Name" class="form-control" placeholder="Name Category..">
          </div>

          

          <button type="submit" class="btn btn-success">Submit</button>
          
        </form>
        
      </div>
    </div>
    </div>
  </div>
</div>

@endsection