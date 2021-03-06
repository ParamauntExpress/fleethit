<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

use App\Driver;

class SignController extends Controller
{
    public function postRent(Request $request) {
        $validator = Validator::make(
            $request->all(),
            [
                'first' => 'required|string',
                'last' => 'required|string',
                'age' => 'required',
                'phone' => 'required',
                'address' => 'required',
                'zip' => 'required',
                'license' => 'required|numeric|unique:drivers',
                'social' => 'required',
                'bank' => 'required',
                'image' => 'required|unique:drivers'
            ]
        );
        
        if ($validator->fails() || !Input::hasFile('image')) {
            //dd($validator->messages()->all());
            
            return view('response', ['messages' => $validator->messages()->all()]);
        }
        
        $md5file = md5_file(Input::file('image')) . '.' . Input::file('image')->getClientOriginalExtension();
        
        Input::file('image')->move(storage_path('passport'), $md5file);
        
        $driver = Driver::create([
            'first' => $request->first,
            'last' => $request->last,
            'age' => $request->age,
            'phone' => $request->phone,
            'address' => $request->address,
            'zip' => $request->zip,
            'license' => $request->license,
            'social' => $request->social,
            'bank' => $request->bank,
            'image' => $md5file
        ]);
        
        return view('response');
    }
    
    public function getPdf($id) {
        if (empty($id)) {
            return 'Empty ID';
        }
        
        $driver = Driver::find($id);
        if (empty($driver)) {
            return 'Not found';
        }
        
        $pdf = \PDF::loadView('pdf', ['driver' => $driver]);
        
        return $pdf->download($driver->first . '_' . $driver->license . '.pdf');
    }
}
