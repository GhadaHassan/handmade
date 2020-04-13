@extends('layouts.includes.main')

@section('content')

<div class="container">

   <div class="row">
       <div class="col-lg-12 col-sm-12 col-12 main-section">
           <div class="dropdown">
               
               <button type="button" class="btn btn-info" data-toggle="dropdown">
                   <i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart <span class="badge badge-pill badge-danger">{{ count(session('cart')) }}</span>
               </button>
               <div class="dropdown-menu">
                   <div class="row total-header-section">
                       <div class="col-lg-6 col-sm-6 col-6">
                           <i class="fa fa-shopping-cart" aria-hidden="true"></i> <span class="badge badge-pill badge-danger">{{ count(session('cart')) }}</span>
                       </div>

                       <?php $total = 0 ?>
 
                       @if(session('cart'))
                           @foreach(session('cart') as $id => $details)
                
                               <?php $total += $details['price'] * $details['quantity'] ?>
                               <div class="col-lg-6 col-sm-6 col-6 total-section text-right">
                                    <p>Total: <span class="text-info">$ {{ $total }}</span></p>
                                </div>
                            
                            @endforeach
                        @endif               
                       

                    </div>

                   @if(session('cart'))
                       @foreach(session('cart') as $id => $details)
                           <div class="row cart-detail">
                               <div class="col-lg-4 col-sm-4 col-4 cart-detail-img">
                                   <img src="{{ $details['image'] }}" />
                               </div>
                               <div class="col-lg-8 col-sm-8 col-8 cart-detail-product">
                                   <p>{{ $details['name'] }}</p>
                                   <span class="price text-info"> ${{ $details['price'] }}</span> <span class="count"> Quantity:{{ $details['quantity'] }}</span>
                               </div>
                           </div>
                       @endforeach
                   @endif
                   <div class="row">
                       <div class="col-lg-12 col-sm-12 col-12 text-center checkout">
                           <a href="{{ url('cart') }}" class="btn btn-primary btn-block">View all</a>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </div>
</div>

<br>

<div class="container">
         <div class="row">
         @foreach($products as $product)
           <div class="col-md-3">
            <div class="panel-group">
              <div class="panel panel-default">
                <div class="panel-body">
                    <div class="thumnail-image">
                     <img src="{{asset('/images/'.$product->image)}}" alt="" />
                    </div>
                    <div class="info-product">
                    <button  data-toggle="modal" data-target="#{{$product->id}}-product_detail_modal">Product Info <i class="fa fa-info-circle"></i></button>
                    </div>
                    <div class="title-product"> <h4>{{$product->title}}</h4></div>
                    
                    <div class="price">  <p>{{$product->price}}</p></div>
                    <p class="btn-holder"><a href="{{ url('add-to-cart/'.$product->id) }}" class="btn btn-warning btn-block text-center" role="button">Add to cart</a> </p>
                    
                </div>
            </div>
        </div>
    </div>
    
    
    <div id="{{$product->id}}-product_detail_modal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="font-size=10 color=#fff"><b>{{$product->title}}</b></h4>
      </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-md-8">  
                <div class="panel-group" style="margin-bottom: 0;">
                <div class="panel panel-default">
                <div class="panel-body">
                 <div class="thumnail-image">
                <img src="{{asset('/images/'.$product->image)}}" alt="" />
                </div>
                <div class="title-product"> <h4>{{$product->title}}</h4></div>  
                <div class="size"> 
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star-o"></span>
                <span class="fa fa-star-o"></span></div>
                <div class="price">  <p>{{$product->price}}</p></div>
                    <p class="btn-holder">
                        <a href="{{ url('add-to-cart/'.$product->id) }}" class="btn btn-warning btn-block text-center" role="button">
                        Add to cart
                        </a> 
                    </p>
                
                </div>
              </div>
             </div>
            </div>
            <div class="col-md-4">
                                              
               <div class="description-product">
               <i class="fa fa-info-circle"></i> <b>Description:</b>
               <p>{{$product->description}}</p>
            
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endforeach
</div>

        <div class="show_more">
            <a href="{{ url('/products') }}" class="btn btn-default">Show more >>></a>
        </div>
        <div class="container">
          {!!$products->links()!!}
        </div>
</div><br>
        

@endsection
@yield('scripts')


 