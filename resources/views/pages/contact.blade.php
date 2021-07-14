@extends('layouts.app')


@section('content')

<section class="mbr-section form3 cid-qv5ApTuHUl" id="form3-2x" data-rv-view="9848">

    

    

    <div class="container">
        <div class="row justify-content-center">
            <div class="title col-12 col-lg-8">
                <h4 class="align-center"><strong>How To Contact Us</strong></h4>
                <h5 class="mbr-section-subtitle align-center pb-5 mbr-light mbr-fonts-style display-5">
                    Subscribe to our Meds</h5>
                
            </div>
        </div>

        <div class="row py-2 justify-content-center">
            <div class="col-12 col-lg-6  col-md-8 " data-form-type="formoid">
                <div data-form-alert="" hidden="">
                        Thanks for filling out the form!
                </div>
                <form class="mbr-form" action="" method="post" data-form-title="Mobirise Form"><input type="hidden" data-form-email="true" value="">
                    <div class="mbr-subscribe input-group" id = "side">
                        <input class="form-control" type="email" name="email" placeholder="Email" data-form-field="Email" required="" id="email-form3-2x" style="margin-left:105%;margin-top:40%;">
                        <span class="input-group-btn">
                            <button href="" type="submit" class="btn btn-primary  display-4" style="margin-left:565%;margin-top:208%;">SUBSCRIBE</button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<div style="margin-top:5%;">

<div>


<!-- Container (Contact Section) -->
<div id="contact" class="container-fluid bg-grey">
  <h2 class="text-center">CONTACT</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Contact us and we'll get back to you within 24 hours.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Sambalpur, Odisha</p>
      <p><span class="glyphicon glyphicon-phone"></span>8598051959</p>
      <p><span class="glyphicon glyphicon-envelope"></span> myemail@something.com</p>
    </div>
    <div class="col-sm-7 slideanim">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-primary pull-right" type="submit">Send</button>
        </div>
      </div>
    </div>
  </div>
</div>


@endsection
<style>

#side{
    margin-left:-20%;
}




</style>