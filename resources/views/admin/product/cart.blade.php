@extends('admin.includes.main_admin')
@section('title','Products')
@section('content')
<div class="container"> 
  <ol class="breadcrumb">
  <li class="breadcrumb-item"><a href="url{{('/')}}">Home</a></li> 
  <li class="breadcrumb-item active">Payment Method</li>
</ol>
<div class="row">
<div class="col-md-12 ">
  <div class="panel panel-default">
    <div class="panel-heading">Payment Method</div>
      <div class="panel-body"> 

        <table id="cart" class="table table-hover table-condensed">
        <thead>
        <tr>
            <th style="width:50%">Product</th>
            <th style="width:10%">Price</th>
            <th style="width:8%">Quantity</th>
            <th style="width:22%" class="text-center">Subtotal</th>
            <th style="width:10%"></th>
        </tr>
        </thead>
        <tbody>

<?php $total = 0 ?>

@if(session('cart'))
    @foreach(session('cart') as $id => $details)

        <?php $total += $details['price'] * $details['quantity'] ?>

        <tr>
            <td data-th="Product">
            <div class="row">
            <div class="col-sm-3 hidden-xs"><img src="{{ $details['image'] }}" width="100" height="100" class="img-responsive"/></div>
            <div class="col-sm-9">
                <h4 class="nomargin">{{ $details['name'] }}</h4>
            </div>
                </div>
            </td>
            <td data-th="Price">${{ $details['price'] }}</td>
            <td data-th="Quantity">
                <input type="number" value="{{ $details['quantity'] }}" class="form-control quantity" />
            </td>
            <td data-th="Subtotal" class="text-center">${{ $details['price'] * $details['quantity'] }}</td>
            <td class="actions" data-th="">
              {{-- <a href="#" class="btn btn-success btn-sm">Edit</a>
              <a href="#" class="btn btn-danger btn-sm">Delete</a> 

              <button class="btn btn-info btn-sm update-cart" data-id="{{ $id }}"><i class="fa fa-refresh"></i></button>
              <button class="btn btn-danger btn-sm remove-from-cart" data-id="{{ $id }}"><i class="fa fa-trash-o"></i></button>
                   --}}
              
            </td>
            
                

        </tr>

        
    @endforeach
    
    <script type="text/javascript">
        $(".update-cart").click(function (e) {
           e.preventDefault();
 
           var ele = $(this);
 
            $.ajax({
               url: '{{ url('update-cart') }}',
               method: "patch",
               data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id"), quantity: ele.parents("tr").find(".quantity").val()},
               success: function (response) {
                   window.location.reload();
               }
            });
        });
        $(".remove-from-cart").click(function (e) {
            e.preventDefault();
 
            var ele = $(this);
 
            if(confirm("Are you sure")) {
                $.ajax({
                    url: '{{ url('remove-from-cart') }}',
                    method: "DELETE",
                    data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id")},
                    success: function (response) {
                        window.location.reload();
                    }
                });
            }
        });
 
    
   </script>



</div>
</div>
</div>






@endif

</tbody>
<tfoot>
<tr class="visible-xs">
    <td class="text-center"><strong>Total {{ $total }}</strong></td>
</tr>
<tr>
    <td><a href="{{ url('/') }}" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
    <td colspan="2" class="hidden-xs"></td>
    <td class="hidden-xs text-center"><strong>Total ${{ $total }}</strong></td>
</tr>
</tfoot>
</table>

<a href="#" class="btn btn-success btn-lg btn-block">Bank Transfer </a>
<a href="#" class="btn btn-warning btn-lg btn-block">Credit Cart</a>

@endsection

@section('scripts')


@endsection