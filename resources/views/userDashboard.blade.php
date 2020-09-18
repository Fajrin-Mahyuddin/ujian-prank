@extends('layouts.app')

@section('content')
    <div class="container m-t-5">
    <h3>Halaman Dashboar User</h3>
    <a href="{{url('MyProfile')}}" class="btn btn-sm btn-primary">Edit Data</a>
    <a href="{{route('logout')}}" class="btn btn-sm btn-danger">logout</a>
    <table class="table">
  <thead>
    <tr>
      <td>Nama</td>
      <td>{{$users->name}}</td>
    </tr>
    <tr>
      <td>Email</td>
      <td>{{$users->email}}</td>
    </tr>
    <tr>
      <td>Gender</td>
      <td>{{$users->gender}}</td>
    </tr>
    <tr>
      <td>Alamat</td>
      <td>{{$users->alamat}}</td>
    </tr>

</table>
    </div>
@endsection