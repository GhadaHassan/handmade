@extends('admin.includes.main_admin')
@section('title','New Product')
@section('content')

<div class="container">
    <div class="row">
        @include('admin.includes.sidebar_admin')
         <div class="col-md-9">
              <div class="panel panel-primary">
      <div class="panel-heading">All Products</div>
      <div class="panel-body">

        <form action="{{route('product.store')}}" enctype="multipart/form-data"  method="POST">
          {{csrf_field()}}
          <div class="form-group">
            <label for="Titel">Name: </lable>
            <input type="text" name="Title" class="form-control" placeholder="Name..">
          </div>

          <div class="form-group">
            <label for="Description">Description: </lable>
            <input type="text" name="Description" class="form-control" placeholder="Description..">
          </div>

          <div class="form-group">
            <label for="Price">Price: </lable>
            <input type="text" name="Price" class="form-control" placeholder="Price..">
          </div>

          <div class="form-group">
            <label for="category_id">Category: </lable>
            <select name="category_id" class="form-control">
              <option value="" disabled selected>Select Category</option>
              @foreach($categories as $category)
              <option value="{{$category->id}}">{{$category->name}}</option>
              @endforeach
            </select>
          </div>

          <div class="form-group">
            <label for="Image">Image: </lable>
            <input type="file" name="Image" class="form-control">
          </div>

          <div class="form-group">
            <label for="Quantity">Quantity: </lable>
            <input type="text" name="quantity" class="form-control" placeholder="Quantity..">
          </div>

          <button type="submit" class="btn btn-success">Submit</button>
          
        </form>
        
      </div>
    </div>
    </div>
  </div>
</div>

@endsection