@extends('layouts.app')

@section('content')
    <div class="container">

        <form class="m-t-5 width-500px" method="POST" action="{{ route('postLogin') }}">
        @csrf
        @if(session('msg'))
                    <div class="alert alert-danger">
                        {{session('msg')}}
                    </div>
                @endif
        <h3>Login</h3>
            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" name="password" id="exampleInputPassword1">
            </div>
            
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>
@endsection
