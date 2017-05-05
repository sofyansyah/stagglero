<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;
class ProfileController extends Controller
{
    //
    public function profile ($username)
    {
    	$user = User::whereUsername($username)->first();
    	return view ('user.profile', compact('user'));
    }
}
