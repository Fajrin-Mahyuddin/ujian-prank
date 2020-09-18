<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class UserController extends Controller
{
    public function index()
    {
        $data = User::where('id', Auth::id())->first();
        return view('userDashboard')->with(['users' => $data]);
    }

    public function editPage()
    {
        $data = User::where('id', Auth::id())->first();
        return view('me-edit')->with(['data' => $data]);
    }
    
    public function MeEditPost(Request $request)
    {
        User::where('id', Auth::id())->update([
            'email' => $request->email,
            'name' => $request->name,
            'gender' => $request->gender,
            'alamat' => $request->alamat,
            'password' => bcrypt($request->password),
        ]);
        return redirect('userDashboard');
    }
}
