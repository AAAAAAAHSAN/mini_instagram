<?php

namespace App\Http\Controllers;
use App\user;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index($user)
    {
        $user = User::find($user);

        return view('home',[
            'user'=>$user,
        ]);
    }
}
