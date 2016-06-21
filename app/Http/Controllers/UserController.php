<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Controllers\DashboardController;
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
        
        $info = new \stdClass();
        $info->header = 'User ' . $user->name;
        $info->message = 'Success updated!';
        
        return (new DashboardController)->getUsers($info);
    }
}
