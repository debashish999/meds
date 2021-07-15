@extends('layouts.app')


@section('content')

<div class="row">

    <div class="col-sm-6">
    <img  src= /storage/{{ $product->gallery}} />
</div>
<div class="col-sm-6">
        <h3>{{ $product->name }}</h3>
        <h3>{{ $product->description }}</h3>
        <h3>{{ $product->category }}</h3>
        <h3>Price: {{ $product->price }}</h3>
        <form action="/add_to_cart" method="POST">
        @csrf
        <input type="hidden" name="product_id" value={{ $product->id }}>
        <button class="btn btn-primary">Add to Cart</button>
        </form><a href="/buynow/{{ $product->id }}">
        <button class="btn btn-success" >Buy Now</button></a>
        </div>

       


</div>





</div>
@endsection
<style>
img{
    width:50%;
    margin-left:40%;
}
</style>