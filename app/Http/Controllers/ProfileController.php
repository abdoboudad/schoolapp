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
    public function status($id){
        $user = User::find($id);
        if($user->status === 'debloc'){
            $user->status = 'bloc';
            $user->save();
        }else{
            $user->status = 'debloc';
            $user->save();
        }
        return redirect()->back()->with('success','le compte a été '.$user->status);
    }
}
