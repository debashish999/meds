
@extends('layouts.app')


@section('content')


<table class="table">
   
    <tbody>
      <tr>
        <td>Amount</td>
        <td>{{ $total ?? '' }}</td>
       
      </tr>
      <tr>
        <td>Tax</td>
        <td>$ 0</td>
        
      </tr>
      <tr>
        <td>Delivery</td>
        <td>$ 10</td>
       
      </tr>
      <tr>
        <td>Total Amount</td>
        <td>{{$total+10}}</td>
       
      </tr>
    </tbody>
  </table>
  <div class=checkout>

    <form action="/orderplace" method="POST">
    @csrf
  <div class="form-group">
    <label for="address">Address:</label>
    <input type="textarea" class="form-control" id="address" name="address" style="height:10em;">
  </div>
  <div class="form-group">
    <label for="payment">Payment Method</label><br>
    <input type="radio" value="cod" name="payment"><span>UPI Payment</span><br>
    <input type="radio" value="cod" name="payment"><span>debit/credit card</span><br>
    <input type="radio" value="cod" name="payment"><span>EMI</span><br>
    <input type="radio"  value="cod" name="payment"><span>Cash on Delivery</span><br>
   
  </div>
  <button type="submit" class="btn btn-success">Order Now</button>
    </form>


  </div>

@endsection
<style>

table{
    margin-left:10%;
}
.checkout{
    width:70%;
    margin-left:10%;
}


</style>
