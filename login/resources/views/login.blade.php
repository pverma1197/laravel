@extends('Layout')
@section('content')

<div>
<h1>Log-in</h1>



<div class="col-sm-8">

<form method="POST" action="login">
@csrf
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