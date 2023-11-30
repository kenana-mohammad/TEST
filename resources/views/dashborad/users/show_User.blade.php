@extends('layout.header')
@section('body')
    
<div class="container">
   
<table class="table table-danger mt-5">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col">role</th>
    </tr>
  </thead>
  <tbody>
     @foreach($user as $users)
    <tr>
      <th scope="row">{{$users->id}}</th>
      <td>{{$users->name}}</td>
      <td>{{$users->email}}</td>
      <td>{{$users->role}}</td>
    </tr>
    @endforeach
  </tbody>
</table>

</div>
@endsection
</body>
</html>