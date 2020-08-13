@extends('Layout')
@section('content')
<div>
<h2> List of users</h2>


@if(Session::get('status'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
 {{Session::get('status')}}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif 

<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">E-mail</th>
      <th scope="col">Mobile</th>
      <th scope="col">Address</th>
    </tr>
  </thead>
  <tbody>
  @foreach($data as $item)
    <tr>
      <td scope="row">{{$item->id}}</td>
      <td scope="row">{{$item->Name}}</td>
      <td scope="row">{{$item->Email}}</td>
      <td scope="row">{{$item->Mobile}}</td>
      <td scope="row">{{$item->Address}}</td>

    </tr>
    @endforeach
  </tbody>
</table>

</div>
@stop