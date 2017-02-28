<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class UserController extends Controller
{
    public function profile()
    {
        return view('user.showuser', array('user' => Auth::user()));
    }
}
