@extends('layouts.app')

@section('content')
<!-- <div class="card-columns">
    @foreach($products as $product)
  <div class="card">
    <img class="card-img-top"  id="cardImage" src="/storage/{{ $product->gallery }}" >
    <div class="card-body">
      <h5 class="card-title">{{ $product->name }}</h5>
      <p class="card-text">{{ $product->description }}</p>
      <p class="card-text"><small class="text-muted">${{$product->price}}</small></p>
    </div>
  </div>
  @endforeach
</div> -->
<div class="container-fluid">
   
            <div class="row">
            @foreach($products as $product)
                <div class="col-md-3 bsp_padding-0">
                    <div class="bsp_bbb_item"> <img src="/storage/{{ $product->gallery }}" class="productImage">
                        <h5 class="bsp_card-title">{{ $product->description }}</h5>
                        <div class="text-center">
                            <p class="bsp_card-text">${{$product->price}}</p>
                            <p>{{ $product->name }}</p>
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
.productImage{
  width:50%;
}
.card{
  display:inline-block;
}

</style>