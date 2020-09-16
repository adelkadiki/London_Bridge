@extends('layouts.web')

@section('content')
<div class="container">
<h5 style="margin-top:3%;">To ship your packages with us please fill the application form</h5>

<x-alert />

<form method="post" action="/submitpack">
@csrf

<div class="form-group">
<label >Shipment destination</label>
<select class="form-control" name="shipment_id" @if($errors->has('shipment_id')) style="border: 2px solid #e74c3c;" @endif>
  <option value="">Choose city</option>
@foreach($shipments as $ship)
<option value="{{$ship->id}}" {{ old('shipment_id') == $ship->id ? "selected" : "" }}>{{$ship->destination}}  {{$ship->date}}</option>
@endforeach
</select>
</div>
 <div class="form-group">
    <label >Full name</label>
    <input type="text" class="form-control" id="customer" name="customer" value="{{old('customer')}}"
    @if($errors->has('customer')) style="border: 2px solid #e74c3c;" @endif>

  </div>

  <div class="form-group">
      <label >ID number</label>
      <input type="text" class="form-control" id="custid" name="custid" value="{{old('custid')}}"
      @if($errors->has('custid')) style="border: 2px solid #e74c3c;" @endif>
    </div>

    <div class="form-group">
        <label >UK Phone number</label>
        <input type="text" class="form-control" id="phone" name="phone" value="{{old('phone')}}"
        @if($errors->has('phone')) style="border: 2px solid #e74c3c;" @endif>
      </div>

      <div class="form-group">
          <label >Email</label>
          <input type="text" class="form-control" id="email" name="email" value="{{old('email')}}"
          @if($errors->has('email')) style="border: 2px solid #e74c3c;" @endif>
        </div>

<div class="form-group">
    <label >Number of packages</label>
    <input type="text" class="form-control" id="quantity" name="quantity" value="{{old('quantity')}}"
    @if($errors->has('quantity')) style="border: 2px solid #e74c3c;" @endif>
    <small  class="form-text text-muted">How many suitcases or boxes do you have</small>
  </div>

  <div class="form-group">
      <label > Contents brief description </label>
      <input type="text" class="form-control" id="description" name="description" value="{{old('description')}}"
      @if($errors->has('description')) style="border: 2px solid #e74c3c;" @endif>
      <small  class="form-text text-muted">Breif description of the package contents</small>
    </div>

  <div class="form-group">
      <label >Dimentions in cm</label>
      <input type="text" class="form-control" id="dimentions" name="dimentions" value="{{old('dimentions')}}"
      @if($errors->has('dimentions')) style="border: 2px solid #e74c3c;" @endif>
        <small  class="form-text text-muted">High X Wide X Long, example: 70 X 40 X 50 or 70-40-50</small>
    </div>

    <div class="form-group">
        <label>weight</label>
        <input type="text" class="form-control" id="weight" name="weight" value="{{old('weight')}}"
        @if($errors->has('weight')) style="border: 2px solid #e74c3c;" @endif>
          <small  class="form-text text-muted">Weight for each package</small>
      </div>

<h6>UK address : </h6>
    <div class="form-group">
        <label >Home number and street</label>
        <input type="text" class="form-control" id="street" name="street" value="{{old('street')}}"
        @if($errors->has('street')) style="border: 2px solid #e74c3c;" @endif>
      </div>

      <div class="form-group">
          <label >City</label>
          <input type="text" class="form-control" id="city" name="city" value="{{old('city')}}"
          @if($errors->has('city')) style="border: 2px solid #e74c3c;" @endif>
        </div>

        <div class="form-group">
            <label >Post code</label>
            <input type="text" class="form-control" id="postcode" name="postcode" value="{{old('postcode')}}"
            @if($errors->has('postcode')) style="border: 2px solid #e74c3c;" @endif>
          </div>

        <div class="form-group">
            <label >Recepient name</label>
              <input type="text" class="form-control" id="recepient" name="recepient" value="{{old('recepient')}}"
              @if($errors->has('recepient')) style="border: 2px solid #e74c3c;" @endif>
        </div>

        <div class="form-group">
            <label >Recepient phone number</label>
            <input type="text" class="form-control" id="recpphone" name="recpphone" value="{{old('recpphone')}}"
            @if($errors->has('recpphone')) style="border: 2px solid #e74c3c;" @endif>
        </div>
<input type="submit" value="Submit" class="btn btn-primary"/>

</form>
<br/>
</div>
@endsection
