@extends('layouts.app')

@section('content')

<h2>result of the Products</h2>

<div class="col-sm-4">
    <a href="">Filter</a>




</div>
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
.productImage{
  width:50%;
}
.card{
  display:inline-block;
}

</style>