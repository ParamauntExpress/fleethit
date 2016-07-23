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
        $colors = \DB::table('cars')->select(\DB::Raw('DISTINCT color'))->orderBy('color', 'asc')->get();
        
        if (!empty(\Request::get('color')) && (\Request::get('color') != 'all')) {
            $cars = $cars->where('color', 'like', '%' . \Request::get('color') . '%');
        }
        if (!empty(\Request::get('sort')) && (\Request::get('sort') != 'nosort')) {
            switch(\Request::get('sort')) {
                case 'plh':
                    $cars = $cars->orderBy('price', 'asc');
                    break;
                case 'phl':
                    $cars = $cars->orderBy('price', 'desc');
                    break;
                case 'ylh':
                    $cars = $cars->orderBy('year', 'asc');
                    break;
                case 'yhl':
                    $cars = $cars->orderBy('year', 'desc');
                    break;
            }
        }
        
        $cars = $cars->get();
        if (!empty(\Request::all())) {
            return view('index', ['cars' => $cars, 'colors' => $colors, 'scroll' => 'block']);
        } else {
            return view('index', ['cars' => $cars, 'colors' => $colors]);
        }
    }
    
    public function getContactUs() {
        return view('contact');
    }
    
    public function getDetail(Car $car) {
        return view('detail', ['car' => $car]);
    }
}
