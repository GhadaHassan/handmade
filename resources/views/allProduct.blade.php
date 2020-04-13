@extends('admin.includes.main_admin')
@section('title','Products')
@section('content')



<div class="container">
    <div class="row">
        @include('admin.includes.sidebar_admin')
         <div class="col-md-9">
              <div class="panel panel-primary">
      <div class="panel-heading">All Products</div>
      <div class="panel-body">
        <table class="table table-hover">
          <thead>
            <tr>
              <th>Image</th>
              <th>Title</th>
              <th>Description</th>
              <th>Price</th>
            </tr>
          </thead>
            <tbody>
              @foreach($product as $products)
              <tr>
                <td width="150"><img style="width:100%"  src="{{asset('images/'.$products->image)}}"/></td>
                <td>{{$products->title}}</td>
                <td>{{$products->description}}</td>
                <td>{{$products->price}}</td>
                @guest
                @else 

                
                <td>
                 <a href="{{route('product.edit', $products->id)}}" class="btn btn-success btn-sm">Edit</a>
                </td>
                <td>
                 <form action="{{route('product.destroy', $products->id)}}" method="POST">
                 {{csrf_field()}}
                 {{method_field('DELETE')}}
                 <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                 </form>
                </td>
                @endguest
              </tr>
              @endforeach
            </tbody>
        </table>
        </div>
    </div>
    <div class="text-center">
        {!! $product->links(); !!}
        </div>
    </div>
  </div>
</div>

@endsection