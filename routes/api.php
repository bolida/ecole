<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return [
        'success' => true,
        'message' => 'Welcome to HERY API' 
    ];
});
