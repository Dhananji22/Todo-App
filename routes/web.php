<?php

use Illuminate\Support\Facades\Route;
use App\Models\Todo;
use App\Http\Resources\TodoResource;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/todos', function () {
    return TodoResource::collection(Todo::all());
});
