@extends('template.main')
@section('main-section')
<style>
   .form-group 
   {    
       padding-top: 10px;
   } 

</style>
<div class="container col-md-6">
 

<form action="{{ url('/') }}/customer" method="POST">
    @csrf  
     
  <div class="form-group">
    <label for="exampleInputEmail1">Customer Name</label>
    <input type="text" name="customer_name" class="form-control" id="customer_name" aria-describedby="emailHelp" placeholder="Customer Name" value="{{ isset($customer->customer_name) ? $customer->customer_name : old('customer_name','') }}">   

    <input type="hidden" name="customer_id" class="form-control" id="customer_id" aria-describedby="emailHelp" placeholder="Customer ID"  value="{{ isset($customer->customer_id) ? $customer->customer_id : old('customer_id','0') }}">   

    @error('customer_name')
        <p class="text-danger"><small> {{ $message }} </small></p>
    @enderror  
  </div>
   
  <div class="form-group">
    <label for="exampleInputEmail1">Customer Address</label>
    <input type="text" name="customer_address" class="form-control" id="customer_address" aria-describedby="emailHelp" placeholder="Customer Address" value="{{ isset($customer->address) ? $customer->address : old('customer_address','') }}">   

    @error('customer_address')
        <p class="text-danger"><small> {{ $message }} </small></p>
    @enderror  
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Customer City</label>
    <input type="text" name="customer_city" class="form-control" id="customer_city" aria-describedby="emailHelp" placeholder="Customer City" value="{{ isset($customer->city_id) ? $customer->city_id : old('customer_city','') }}">   

    @error('customer_city')
        <p class="text-danger"><small> {{ $message }} </small></p>
    @enderror  
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Customer State</label>
    <input type="text" name="customer_state" class="form-control" id="customer_state" aria-describedby="emailHelp" placeholder="Customer State" value="{{ isset($customer->state_id) ? $customer->state_id : old('customer_state','') }}">   

    @error('customer_state')
        <p class="text-danger"><small> {{ $message }} </small></p>
    @enderror  
  </div>
 
  <div class="form-group">
    <label for="exampleInputEmail1">Customer Country</label>
    <input type="text" name="customer_country" class="form-control" id="customer_country" aria-describedby="emailHelp" placeholder="Customer Country" value="{{ isset($customer->country) ? $customer->country : old('customer_country','') }}">

    @error('customer_country')
        <p class="text-danger"><small> {{ $message }} </small></p>
    @enderror  
  </div>
  
<div class="row">
  <div class="form-group"><br> 
  <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</div>
</form>
</div>


@endsection