@extends('admin.includes.main_admin')
@section('title','Edit Product')
@section('content')

<div class="container">
    <div class="row">
        @include('admin.includes.sidebar_admin')
         <div class="col-md-9">
              <div class="panel panel-primary">
      <div class="panel-heading">Edit Products</div>
      <div class="panel-body">

        <form action="{{route('product.update', $product->id)}}" enctype="multipart/form-data"  method="POST">
          {{csrf_field()}}
          {{method_field('put')}}
          <div class="form-group">
            <label fae="Titel">Title: </lable>
            <input type="text" name="Title" class="form-control" value="{{$product->title}}">
          </div>

          <div class="form-group">
            <label fae="Description">Description: </lable>
            <input type="text" name="Description" class="form-control" value="{{$product->description}}">
          </div>

          <div class="form-group">
            <label fae="Price">Price: </lable>
            <input type="text" name="Price" class="form-control"  value="{{$product->price}}">
          </div>

          <div class="form-group">
            <label for="category_id">Category: </lable>
            <select name="category_id" class="form-control">
              <option value="" disabled selected>Select Category</option>
              @foreach($categories as $category)
              <option value="{{$category->id}}" <?php if($product->Category_Id == $category->id){echo "selected";}?> >{{$category->name}}</option>
              @endforeach
            </select>
          </div>


          <div class="form-group">
            <label fae="Image">Image: </lable>
            <input type="file" name="Image" class="form-control">
          </div>

          <div class="form-group">
            <img style="width: 50%" src="{{asset('images/'.$product->image)}}" >
          </div>

          <div class="form-group">
            <label fae="Quantity">Quantity: </lable>
            <input type="file" name="quantity" class="form-control">
          </div>
          <button type="submit" class="btn btn-success">Submit</button>
          
        </form>
        
      </div>
    </div>
    </div>
  </div>
</div>

@endsection