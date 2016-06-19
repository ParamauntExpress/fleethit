<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function getIndex() {
        if (\Auth::check()) {
            $drivers = DB::table('drivers')->paginate(10);
            
            return view('dashboard', ['drivers' => $drivers]);
        } else {
            return redirect()->intended('/');
        }
    }
}
