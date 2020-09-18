<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = User::where('level', 'user')->get();
        return view('dashboard')->with(['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function register()
    {
        return view('register');
    }
    public function postRegister(Request $request)
    {
        User::create([
            'email' => $request->email,
            'name' => $request->name,
            'level' => 'user',
            'gender' => $request->gender,
            'status' => 0,
            'alamat' => $request->alamat,
            'password' => bcrypt($request->password),
        ]);
        return redirect('dashboard');
    }
    public function editRegister(Request $request)
    {
        User::where('id', $request->id)->update([
            'email' => $request->email,
            'name' => $request->name,
            'gender' => $request->gender,
            'status' => $request->status,
            'alamat' => $request->alamat,
            // 'password' => bcrypt($request->password),
        ]);
        return redirect('dashboard');
    }

    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = User::where('id', $id)->first();
        return view('edit')->with(['data' => $data]);
    }

    public function destroy($id)
    {
        User::destroy($id);
        return redirect('dashboard')->with(['msg' => 'data berhasil di hapus']);

    }
}
