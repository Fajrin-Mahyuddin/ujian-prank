@extends('layouts.app')

@section('content')
    <div class="container">

        <form class="m-t-5 width-500px" method="POST" action="{{ route('postRegister') }}">
        <h3>Register User Baru</h3>
        @csrf
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" required name="name" aria-describedby="emailHelp">
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" required name="email" aria-describedby="emailHelp">
                </div>
            </div>

            <div class="form-group row">
                <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="alamat" required aria-describedby="emailHelp">
                </div>
            </div>

            <div class="form-group row">
                <label for="gender" class="col-sm-2 col-form-label">Gender</label>
                <div class="col-sm-10">
                    <select name="gender" id="gender" class="form-control">
                        <option value="Laki-Laki">Laki-Laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="password" class="col-sm-2 col-form-label">password</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" required name="password" id="exampleInputPassword1">
                </div>
            </div>
            
            <button type="submit" class="btn btn-info">Register</button>
            <a href="{{url('dashboard')}}" class="btn btn-warning">Batal</a>

        </form>
    </div>
    @endsection
