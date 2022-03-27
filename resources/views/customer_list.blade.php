@extends('template.main')
@section('main-section')
 
<div class="container">
 
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Customer Name</th>
      <th scope="col">Address</th>
      <th scope="col">City</th>
      <th scope="col">State</th>
      <th scope="col">Country</th>
      <th scope="col">Action</th>
      
    </tr>
  </thead>
  <tbody>
      <?php $sno= 0 ; 
      ?>
    @foreach($customer as $dt_row)
      <?php $sno++;?>
    <tr>
      <th scope="row">{{$sno}}</th>
      <td>{{ $dt_row['customer_name']}}</td>
      <td>{{ $dt_row['address']}}</td>
      <td>{{ $dt_row['city_id']}}</td>
      <td>{{ $dt_row['state_id']}}</td>
      <td>{{ $dt_row['country']}}</td>
      <td>
        <a href="{{ url('/customer/edit') }}/{{ $dt_row['customer_id'] }}">  
        <button class="btn btn-sm btn-primary">Edit</button></a>&nbsp;&nbsp;
        <a href="{{ url('/customer/delete') }}/{{ $dt_row['customer_id'] }}">  
        <button class="btn btn-sm btn-danger">Delete</button>
        </a>

        
      </td>
    </tr>
    @endforeach

  </tbody>
</table>
</div>

@endsection
