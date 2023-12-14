<?php

use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;   


Route::get('/', function () {
    return view('index');
});

Route::get('/inicio', [HomeController::class,'inicio'] {
    return view '/'
   
});

Route::post('/inicio/cadastrar-produto', function (Request $request){
    dd($request->all());
});

