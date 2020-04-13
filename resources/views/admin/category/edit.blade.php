@extends('admin.includes.main_admin')
@section('title','Edit Category')
@section('content')

<div class="container">
    <div class="row">
        @include('admin.includes.sidebar_admin')
         <div class="col-md-9">
              <div class="panel panel-primary">
      <div class="panel-heading">Edit Category</div>
      <div class="panel-body">

        <form action="{{route('category.update', $category->id)}}" enctype="multipart/form-data"  method="POST">
          {{csrf_field()}}
          {{method_field('put')}}
          <div class="form-group">
            <label fae="Titel">Name: </lable>
            <input type="text" name="Name" class="form-control" value="{{$category->name}}">
          </div>

          

          <button type="submit" class="btn btn-success">Submit</button>
          
        </form>
        
      </div>
    </div>
    </div>
  </div>
</div>

@endsection