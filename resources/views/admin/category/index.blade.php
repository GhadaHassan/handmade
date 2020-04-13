@extends('admin.includes.main_admin')
@section('title','categories')
@section('content')

<div class="container">
    <div class="row">
        @include('admin.includes.sidebar_admin')
         <div class="col-md-9">
              <div class="panel panel-primary">
      <div class="panel-heading">All categories</div>
      <div class="panel-body">
        <table class="table table-hover">
          <thead>
            <tr>
              <th>NO.</th>
              <th>Name</th>
            </tr>
          </thead>
            <tbody>
            @foreach($category as $categories)
            <tr>
                <td>{{$categories->id}}</td>
                <td>{{$categories->name}}</td>
                <td width="10">
                 <a href="{{route('category.edit', $categories->id)}}" class="btn btn-success btn-sm">Edit</a>
                </td>
                <td>
                 <form action="{{route('category.destroy', $categories->id)}}" method="POST">
                 {{csrf_field()}}
                 {{method_field('DELETE')}}
                 <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                 </form>
                </td>
              </tr>
              @endforeach
            </tbody>
        </table>
        </div>
    </div>
    <div class="text-center">
        {!! $category->links(); !!}
        </div>
    </div>
  </div>
</div>

@endsection