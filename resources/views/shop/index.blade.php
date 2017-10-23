@extends('layouts.master')
@section('title')
    Shoppin cart
@endsection
@section('content')

<?php
 // print_r($products->chunk(3));
?>
@foreach($products->chunk(3) as $productChunk)
     <div class="row">
       @foreach($productChunk as $product)
       
     	<div class="col-sm-6 col-md-4">
     		<div class="thumbnail">
     			<img class="image-responsive" style="max-width:250px; padding: 0 , 15px;" src=" {{$product->imagePath}}">
     			<div class="caption">
     				<h3> {{$product->title}}</h3>
     				<p class="description"> {{$product->description}}</p>
     				<div class="clearfix">
     				<div class="pull-left price"> {{$product->price}}</div>
     					
     					<a class="btn btn-success pull-right" href="#">Add to Cart</a>
     				</div>
     			</div><!-- capiton -->
     		</div><!-- thumbnail -->
     	</div><!-- col-md-6 -->
     	 @endforeach
   @endforeach
         
     </div><!-- row -->
@endsection
