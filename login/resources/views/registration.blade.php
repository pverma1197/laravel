@extends('Layout')
@section('content')
<div>

<h1>Registration Form</h1>

<div class="col-sm-6">

<form method="POST" action="registration">
@csrf
  <div class="form-group">
    <label>Name</label>
    <input type="text" name="Name" class="form-control" placeholder="Enter name">
  </div>
  <div class="form-group">
    <label>E-mail</label>
    <input type="text" name="Email" class="form-control" placeholder="Enter e-mail">
  </div>
  <div class="form-group">
    <label>Mobile</label>
    <input type="text" name="Mobile" class="form-control" placeholder="Enter Mobile No.">
  </div>
  <div class="form-group">
    <label>Address</label>
    <input type="text" name="Address" class="form-control" placeholder="Enter addess">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

</div>


</div>

@stop