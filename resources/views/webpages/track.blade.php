@extends('layouts.web')

@section('content')
<div class="container" style="height:80%;">
<br>
<br>
<br>
<br>
<h5>Package tracking number</h5>

@if(session()->has('message'))
<div class="alert alert-primary" role="alert">{{session()->get('message')}}</div>
@endif

@if($errors->any())
<h5 class="alert alert-danger">Package number is required</h5>
@endif

<form method="get" action="/trackpack">
  @csrf
<div class="">
<input type="text" name="id" class="form-control"/>
</div>
<input type="submit" value="Track" class="btn btn-primary"  style="margin-top:4%; width:25%; margin-left:35%;" />
</from>

</div>
@endsection
