@extends('Layout')
@section('content')

<div>
<h1>Sign-in</h1>



<div class="col-sm-8">

<form method="POST" action="signin">
@csrf
  <div class="form-group">
    <label>Name</label>
    <input type="text" name="name" class="form-control" placeholder="Enter name">
  </div>
  <div class="form-group">
    <label>E-mail</label>
    <input type="text" name="email" class="form-control" placeholder="Enter e-mail">
  </div>
  <div class="form-group">
    <label>Password</label>
    <input type="password" name="password" class="form-control" placeholder="Enter Password">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

</div>


</div>

@stop