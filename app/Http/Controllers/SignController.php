<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

use App\Driver;

class SignController extends Controller
{
    public function postRegister(Request $request) {
        $validator = Validator::make(
            $request->all(),
            [
                'first' => 'required|string',
                'last' => 'required|string',
                'license' => 'required|numeric|unique:drivers',
                'image' => 'required|unique:drivers'
            ]
        );
        
        if ($validator->fails() || !Input::hasFile('image')) {
            dd($validator);
            return 'Fail';
        }
        
        $md5file = md5_file(Input::file('image')) . '.' . Input::file('image')->getClientOriginalExtension();
        
        Input::file('image')->move(storage_path('passport'), $md5file);
        
        $driver = Driver::create([
            'first' => $request->first,
            'last' => $request->last,
            'license' => $request->license,
            'image' => $md5file
        ]);
        
        return 'Success';
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
