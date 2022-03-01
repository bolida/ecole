<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TopicalityController;

Route::apiResource('topicality', TopicalityController::class);
