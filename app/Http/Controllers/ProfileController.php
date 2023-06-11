<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;

class ProfileController extends Controller
{
    public function profile($name){
        $user = User::where('name',$name)->first();
        return view('admin.users.profile',compact('user'));
    }
}
