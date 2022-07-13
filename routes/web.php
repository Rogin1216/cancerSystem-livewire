<?php

use App\Models\cancerRegistry2;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Comments;
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
    $comments = cancerRegistry2::all();
    
    return view('welcome', compact('comments'));
});
route::post('http://192.168.7.188:8040/api/login');