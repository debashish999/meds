<?php
use App\Http\Controllers\ProductController;
$total = ProductController::cartItem();

?>
@extends('layouts.app')


@section('content')
<a href="/ordernow">
<button style="margin-left:36%;"class="btn btn-success">proceed to buy({{$total}} items)
</button></a>
<hr>
@foreach($products as $product)

<div class="row">

    <div class="col-sm-6">
    <img  src= /storage/{{ $product->gallery}} />
</div>
<div class="col-sm-6">
        <h3>{{ $product->name }}</h3>
        <h3>{{ $product->description }}</h3>
        <h3>{{ $product->category }}</h3>
        <h3>Price: {{ $product->price }}</h3>
        <!-- <form action="/add_to_cart" method="POST">
        @csrf
        <input type="text" name="product_id" value={{ $product->id }}> -->
        <a href="/removecart/{{ $product->cart_id }}">
        <button class="btn btn-primary">Remove</button></a>
        <!-- </form> -->
       
        <hr>
        <hr>
        </div>
      

@endforeach
<hr>
<a href="/ordernow">
<button style="margin-left:36%;"class="btn btn-success">proceed to buy({{$total}} items)
</button></a>


@endsection
<style>
img{
    width:30%;
    margin-Left:60%;
    
}
</style>