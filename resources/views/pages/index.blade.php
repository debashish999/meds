@extends('layouts.app')


@section('content')
<img src="/storage/{{ $logo }}" alt="logo" id="logo">

<img src="/storage/{{ $poster }}" alt="poster" id="poster">


<main role="main" class="inner cover">
        <h1 class="cover-heading"></h1>
        <p class="lead" id="head">As reliable as your family <br>to secure your life</p>
        <p class="lead">
          <a href="#" class="btn btn-lg btn-secondary" style="margin-left:20%">Learn more</a>
        </p>
      </main>

     


<div style="margin-top:400px;"></div>
<!-- <h4>welcome {{ session('user')}}</h4>
@if(session()->has('user'))
<a type= "hidden" href="/logout">Logout</a>
@endif -->
<div style="margin-top:200px;"></div>
<!-- <div class="card-rows"> -->
<!-- <div class="card-columns"> -->
    <!-- @foreach($products as $product)
  <div class="card" id="card">
    <img class="card-img-top"  id="cardImage" src="/storage/{{ $product->gallery }}" >
    <div class="card-body">
      <h5 class="card-title">{{ $product->name }}</h5>
      <p class="card-text">{{ $product->description }}</p>
      <p class="card-text"><small class="text-muted">${{$product->price}}</small></p>
    </div> -->
  <!-- </div> -->
  <!-- @endforeach -->
 <!-- </div> -->
 <div class="container-fluid">
   
            <div class="row">
           
            @foreach($products as $product)
              
                <div class="col-md-3 bsp_padding-0">
                <a href="detail/{{ $product->id }}">
                    <div class="bsp_bbb_item"> <img src="/storage/{{ $product->gallery }}" class="productImage">
                        <h5 class="bsp_card-title">{{ $product->description }}</h5>
                        <div class="text-center">
                            <p class="bsp_card-text">${{$product->price}}</p>
                            <p>{{ $product->name }}</p>
                            </a>
                        </div>
                    </div>
                </div>
                
                @endforeach
            </div>
        </div>
    </div>
</div>

  
@endsection


<style>
#head{
    color:white;
    margin-left:20%;
    font-size:3em;

}
#logo{
    position: absolute;
    width:10%;
    margin-top:-5.6%;
    z-index: 1;
    margin
}
#poster{
    position: absolute;
    height:600px;
    width:110%;
    margin-left:-10%;
    margin-top:-1.8%;
    margin-right
    z-index: -1;
}

body{
    overflow:auto;
}
/* #cardImage{
    width:50%;
} */
#card{
  width:50%;
  height:20em;
  display:inline-block;
  

}
#cardImage{
  width:50%;
}
.productImage{
  width:50%;
}

</style>