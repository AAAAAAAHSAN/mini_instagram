<?php

namespace App\Http\Controllers;
use App\user;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index($user)
    {
        $user = User::findOrFail($user);

        return view('profiles.index',[
            'user'=>$user,
        ]);
    }
}
