<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Support\Facades\DB;

use Gate;

class DashboardController extends Controller
{
    public function getIndex() {
        if (\Auth::check()) {
            return redirect()->intended('/dashboard/drivers');
        } else {
            return redirect()->intended('/');
        }
    }
    
    public function getDrivers($info = null) {
        //if (Gate::allows('admin') || Gate::allows('manager')) {
            $drivers = DB::table('drivers')->paginate(10);
            
            return view('dashboard', ['template' => 'drivers', 'drivers' => $drivers]);
        //}
    }
    
    public function getUsers(Request $request) {
        //if (Gate::allows('admin') || Gate::allows('manager')) {
            $users = DB::table('users')->paginate(10);
            
            return view('dashboard', ['template' => 'users', 'users' => $users])->with(['info' => ($request) ? $request->info : $request]);
        //}
    }
    
    public function getUpdateUser(array $data = []) {
        if (empty($data)) {
            return redirect()->back();
        }
        
        $info = new \stdClass();
        $info->header = 'User ID:' . $data['id'];
        $info->message = 'Message';
        
        return self::getUsers($info);
    }
}
