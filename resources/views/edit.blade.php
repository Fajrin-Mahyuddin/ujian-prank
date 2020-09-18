@extends('layouts.app')

@section('content')
    <div class="container">
        <form class="m-t-5 width-500px" method="POST" action="{{ route('editRegister') }}">
        <h3>Update Data User</h3>
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
                <label for="exampleInputEmail1">Status</label>
                <select name="status" id="status" value={{$data->status}} class="form-control">
                    @if($data->status)
                     <option value="1">Setujui</option>
                    @else
                     <option value="0">Belum Di Setujui</option>
                    @endif
                    
                     <option value="1">Setujui</option>
                     <option value="0">Belum Di Setujui</option>

                </select>
            </div>
            
            
            <button type="submit" class="btn btn-primary">Register</button>
        </form>
    </div>
    @endsection
