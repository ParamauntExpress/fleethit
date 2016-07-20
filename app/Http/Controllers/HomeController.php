<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

use App\Car;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex()
    {
        $cars = Car::whereNotNull('price');
            
        if (!empty(\Request::get('year'))) {
            $cars = $cars->where('year', 'like', '%' . \Request::get('year') . '%');
        }
        if (!empty(\Request::get('color'))) {
            $cars = $cars->where('color', 'like', '%' . \Request::get('color') . '%');
        }
        if (!empty(\Request::get('price_from')) && !empty(\Request::get('price_to'))) {
            $cars = $cars->whereBetween('price', [\Request::get('price_from'), \Request::get('price_to')]);
        }
        
        $cars = $cars->get();
        if (!empty(\Request::all())) {
            return view('index', ['cars' => $cars, 'scroll' => 'block']);
        } else {
            return view('index', ['cars' => $cars]);
        }
    }
    
    public function getDetail(Car $car) {
        return view('detail', ['car' => $car]);
    }
}
