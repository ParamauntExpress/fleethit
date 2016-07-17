<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Support\Facades\DB;

use App\User;

class UserController extends Controller
{
    public function getEdit(User $user) {
        //$user = User::find($id);
        
        return view('user', ['user' => $user]);
    }
    
    public function postEdit(Request $request) {
        $user = User::find($request->id);
        
        $user->update(['role' => $request->role]);
        
        $info = ['header' => 'User ' . $user->name, 'message' => 'Success updated!'];
        
        return \Redirect::route('users', ['info' => $info]);
    }
}
