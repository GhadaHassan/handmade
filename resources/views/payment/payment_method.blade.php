@extends('layouts.includes.main')
@section('title','Payment Method')
@section('content')

<div class="container"> 
  <ol class="breadcrumb">
  <li class="breadcrumb-item"><a href="#">Home</a></li> 
  <li class="breadcrumb-item active">Payment Method</li>
</ol>
<div class="row">
<div class="col-md-8 ">
  <div class="panel panel-default">
    <div class="panel-heading">Payment Method</div>
      <div class="panel-body"> 
        
      <br>
        <div class="row">
         <div class="col-md-5">
            <div class="thumnail-image">
           </div>
        </div>
      <div class="col-md-7">    
        <div class="title-product"> <h3 style="margin-top: 0;"><b>asd</b></h3></div>
           
                   <div class="price"> <h4>price</h4></div>
        <div class="row">
        <div class="col-xs-2">
            <label>QTY :</label>
        </div>
        <div class="col-md-8">
             <span></span>
        </div>
         </div>
  
          <div class="row"> 
        <div class="col-md-2">
            <label>SIZE :</label>
        </div>
          <div class="col-md-8">
               <span></span>
        </div>
         </div>
         <br> 
       </form>  
        </div> 
       </div> <!-- row foreach --> 
 
     </div> <!-- panel body --> 
       <div class="panel-footer">
          <div class="row">
            <div class="panel-footer">
           </div>
         <div class="col-md-7"> 
              <a href="#" class="btn btn-success" style="background-color: #303734; border: none">Edit Cart</a>
          </div> 
          <div class="col-md-5">
             <div class="row">
                 <div class="col-md-5">
                     <b>
                      
                      </b>
                </div>
                  <div class="col-md-7">
                      <b>
                        
                      </b>
                  </div>
            </div>
          </div>
         </div>
        </div> <!-- panel footer -->      
        </div>
      </div> <!-- col md 8 --> 
         <div class="col-md-4">
          <div class="panel-group">
          <div class="panel panel-default">
           <div class="panel-body">
              <div class="alert alert-info" style=" margin-bottom: 0px;">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s 
              </div>
          </div>
         </div>
         </div>
           <a href="#" class="btn btn-success btn-lg btn-block">Bank Transfer </a>
           <a href="#" class="btn btn-warning btn-lg btn-block">Credit Cart</a>
        </div> <!-- col md 4 --> 
      </div>
    </div> <!-- container -->

@endsection