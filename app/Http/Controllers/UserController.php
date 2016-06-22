<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Support\Facades\DB;

use App\User;

class UserController extends Controller
{
    public function getEdit($id) {
        $user = User::find($id);
        
        return view('user', ['user' => $user]);
    }
    
    public function postEdit(Request $request) {
        $user = User::find($request->id);
        
        $user->update(['role' => $request->role]);
        
        $info = ['header' => 'User ' . $user->name, 'message' => 'Success updated!'];
        
        $users = DB::table('users')->paginate(10);
        
        return \Redirect::route('users', ['info' => $info]);
        //view('dashboard', ['template' => 'users', 'users' => $users])
    }
}
