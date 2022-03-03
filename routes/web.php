<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pcontroller;
use App\Http\Controllers\procontroller;
use App\Http\Controllers\cucontroller;

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

Route::get('/home', function () {
    return view('home');
});

Route::prefix('/product')->group(function(){
    Route::get('/', function (){
        return view('product');
        Route::get('/laptop', [pcontroller::class, 'p1']);
        Route::get('/keyboard', [pcontroller::class, 'p2']);
        Route::get('/handphone', [pcontroller::class, 'p3']);
        Route::get('/flashdisk', [pcontroller::class, 'p4']);
        Route::get('/mouse', [pcontroller::class, 'p5']);
    }); 
});

Route::get('news/{tittle}', function (){
    return view('news', ['tittle' => 'Natural Disaster']);
});

Route::prefix('/program')->group(function(){
    Route::get('/', function (){
        return view('program');
        Route::get('/beasiswa', [procontroller::class, 'pro1']);
        Route::get('/vaksinasi', [procontroller::class, 'pro2']);
        Route::get('/donordarah', [procontroller::class, 'pro3']);
    }); 
});

Route::get('/aboutus', function () {
    return view('about-us', ['name' => 'Disney'], ['address' => 'U.S']);
});

Route::resource('contact-us', cucontroller::class);