<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Auth::routes();
Route::get('/generate', function () {
    App\User::create([
        'email' => 'a@a.com',
        'name' => 'admin',
        'level' => 'admin',
        'gender' => 'laki-laki',
        'status' => 1,
        'alamat' => 'makassar',
        'password' => bcrypt('123'),
    ]);
    return 'ok';
});

Route::get('/', function () {
    return view('index');
})->name('login')->middleware('guest');

Route::post('/postLogin', 'LoginController@postLogin')->name('postLogin');


Route::group(['middleware' => ['auth', 'level:admin']], function() {
    Route::get('/dashboard', 'AdminController@index');
    Route::get('/register', 'AdminController@register');
    Route::post('/postRegister', 'AdminController@postRegister')->name('postRegister');
    Route::get('/edit/{id}', 'AdminController@edit');
    Route::post('/editRegister', 'AdminController@editRegister')->name('editRegister');
    Route::get('/delete/{id}', 'AdminController@destroy');
});

Route::group(['middleware' => ['auth', 'level:user']], function() {
    Route::get('/userDashboard', 'UserController@index');
    Route::get('/MyProfile', 'UserController@ubah');
    Route::post('/MeEditPost', 'UserController@ubahPost')->name('MeEditPost');
});

Route::get('404', function() {
    return view('404');
});

Route::get('logout', function() {
    Auth::logout();
    return redirect('/');
})->name('logout');
