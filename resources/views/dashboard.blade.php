@extends('layouts.app')

@section('content')
    <div class="container">
    <h3>Daftar User</h3>
    <a href="{{url('register')}}" class="btn btn-sm btn-success">Register</a>
    <a href="{{route('logout')}}" class="btn btn-sm btn-danger">logout</a>
   
    <table class="table table-borderless">
      <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Email</th>
        <th scope="col">Nama</th>
        <th scope="col">Alamat</th>
        <th scope="col">Status</th>
        <th scope="col">aksi</th>
      </tr>
      </thead>
      <tbody>
      <?php $no=1; ?>
        @foreach($data as $list)
        <tr>
          <td>{{$no}}</td>
          <td>{{$list->email}}</td>
          <td>{{$list->name}}</td>
          <td>{{$list->alamat}}</td>
          <td>
          @if($list->status) 
           <a href="{{url('/edit/'.$list->id)}}">Di Setujui</a>
          @else
           <a href="{{url('/edit/'.$list->id)}}" >Belum di setujui</a>
          @endif
          </td>
          <td>
            <a href="{{url('/delete/'.$list->id)}}" >Delete</a>
          </td>
        </tr>
      
      <?php $no++; ?>
      @endforeach
      </tbody>
    </table>
    </div>
@endsection