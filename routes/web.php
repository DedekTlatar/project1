<?php

use Illuminate\Support\Facades\Route;


use Illuminate\Http\Request;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/about/{id} ', function (Request $request, $id) {
    $data['title']='About';
    if($id==1){
    return view('about',$data);
    }
    else{
      $data['title']='Error 503: Service Unavailable';
      return view('about',$data);  
    }
    
});


use App\Http\Controllers\UserController; 
Route::resource('user', UserController::class);

Route::get('/user/{halaman}', [UserController::class, 'show']);
