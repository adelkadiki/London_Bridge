@extends('layouts.web')

@section('content')

<div id="bg">

</div>
<div class="container">
<div id="sec1" class="section" >
  <h5 style="text-align:center; font-weight:550; margin-bottom:2%;">Who we are</h5>
<p>
  London Bridge in partnerhsip with Alwafyah Logistics are  fast growing companies offering overseas shipping services. Our competitive shipping costs helped us to build a wide clients network across the UK different cities. Individuals or businesses who are looking for professional fright services in a short amount of time.
  Our company invested in technology to facilitate to our clients high level services which makes us outstandingly out of competition, we offer pick up service from clients’ locations throughout the UK cities, once the client made a request through our system, our team will contact the client to arrange collecting the shipment in a very short time.

</p>
<h5 style="text-align:center; font-weight:550; margin-bottom:2%;">Ship with us</h5>
<p>
  To ship with us please click on Ship With Us link to fill out the request form. Providing all the necessary information will help us to make better arrangement and preparation in order to make easier for both sides to have every done accurate and fast, to make sure getting the package collected and dispatched.
</p>
</div>

<x-alert />

<div id="contact" style="margin-top:7%;">

  <div class="row">

    <div class="col-md-6" style=" padding-left:7%; padding-right:4%;">
    </p>
    <h5 style="text-align:center; font-weight:550; margin-bottom:10%;">Contact us</h5>
    <p>
      <p>For any inquiry you can call on the number mentioned below or email us by submitting the contact form.</p>
      <p>To get more information about some items that might be prohibited according to local or global regulations
    please contact us </p>
      <p style="font-weight:600;">Phone :  07429140099</p>
    </div>

      <div class="col-md-6">
        <form method="post" action="/contact">
          @csrf
          <div class="form-group">
              <label>Name</label>
              <input type="text" name="name" class="form-control" value="{{ old('name')}}"/>
          </div>
          <div class="form-group">
              <label>Email</label>
              <input type="text" name="email" class="form-control" value="{{ old('email')}}" />
          </div>
          <div class="form-group">
              <label>Message</label>
              <textarea class="form-control"  name="message" rows="8" cols="80"></textarea>
          </div>
          <div class="form-group">
              <input type="submit" value="Submit" class="form-control" value="{{ old('message')}}" style="background-color:#336b87; color:white;" />
          </div>
        </form>
      </div>
  </div>
</div>
</div>

@endsection
