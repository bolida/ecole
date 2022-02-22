<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    //
    public function index()
    {
        $user = User::all();
    }

    //
    public function show($userId)
    {
        $user = User::find($userId);
        
        return view('user', [
            'user' => $user
        ]);
    }
}
