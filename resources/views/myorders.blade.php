@extends('layouts.app')

@section('content')

<h2 style="margin-left:40%;">my orders</h2>



<div class="row">
@foreach($orders as $order)
    <div class="col-sm-6">
    <img  src= /storage/{{ $order->gallery}} />
</div>
<div class="col-sm-6">
        <h3>{{ $order->name }}</h3>
        <h3>{{ $order->description }}</h3>
        <h3>{{ $order->category }}</h3>
        
       
        <hr>
        </div>
      

@endforeach


@endsection

<style>
img{
    width:30%;
    margin-Left:60%;
    
}
</style>