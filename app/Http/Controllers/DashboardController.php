<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Requests;
use App\Car;
use App\Driver;
use App\User;

use Gate;

class DashboardController extends Controller
{
    public function getIndex() {
        if (\Auth::check()) {
            if (Gate::allows('admin', \Auth::user()) || Gate::allows('manager', \Auth::user())) {
                return redirect()->intended('/dashboard/cars');
            } else {
                return redirect()->intended('/');
            }
        } else {
            return redirect()->intended('/');
        }
    }
    
    public function getCars(Request $request) {
        if (\Auth::check()) {
            $cars = Car::whereNotNull('price');
            
            if (!empty(\Request::get('year'))) {
                $cars = $cars->where('year', 'like', '%' . \Request::get('year') . '%');
            }
            if (!empty(\Request::get('vin'))) {
                $cars = $cars->where('vin', 'like', '%' . \Request::get('vin') . '%');
            }
            if (!empty(\Request::get('color'))) {
                $cars = $cars->where('color', 'like', '%' . \Request::get('color') . '%');
            }
            
            $cars = $cars->paginate(10);
            
            return view('dashboard', ['template' => 'cars', 'cars' => $cars])->with(['info' => ($request) ? $request->info : null]);
        } else {
            return redirect()->intended('/');
        }
    }
    
    public function getDrivers() {
        if (\Auth::check()) {
            $drivers = Driver::paginate(10);
        
            return view('dashboard', ['template' => 'drivers', 'drivers' => $drivers]);
        } else {
            return redirect()->intended('/');
        }
    }
    
    public function getUsers(Request $request) {
        if (\Auth::check()) {
            $users = User::paginate(10);
            
            return view('dashboard', ['template' => 'users', 'users' => $users])->with(['info' => ($request) ? $request->info : $request]);
        } else {
            return redirect()->intended('/');
        }
    }
    
    public function getKek() {
        $user = \Auth::user();
        
        if (Gate::allows('admin', $user)) {
            dd($user);
        }
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
