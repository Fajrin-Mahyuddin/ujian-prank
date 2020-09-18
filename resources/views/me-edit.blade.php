@extends('layouts.app')

@section('content')
    <div class="container">
        <form class="m-t-5 width-500px" method="POST" action="{{ route('MeEditPost') }}">
        <h3>Edit Profile</h3>
        @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Nama</label>
                <input type="text" class="form-control" required value={{$data->name}} name="name" aria-describedby="emailHelp">
                <input type="hidden" value={{$data->id}} name="id">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" class="form-control" required value={{$data->email}} name="email" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Gender</label>
                <select name="gender" id="gender" class="form-control">
                    <option value={{$data->gender}}>{{$data->gender}}</option>
                    <option value="Laki-Laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Alamat</label>
                <input type="text" class="form-control" required value={{$data->alamat}} name="alamat" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" required name="password" id="exampleInputPassword1">
            </div>
            
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{url('userDashboard')}}" class="btn btn-info">Batal</a>

        </form>
    </div>
    @endsection
