<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;

use App\Http\Requests;
use App\Car;
use App\Photo;

class CarController extends Controller
{
    public function getCreate() {
        return view('car');
    }
    
    public function postCreate(Request $request) {
        $car = Car::create($request->all());
        
        $info = ['header' => 'Car-ID ' . $car->id, 'message' => 'Success create!'];
        
        return \Redirect::route('cars', ['info' => $info]);
    }
    
    public function getEdit(Car $car) {
        return view('car', ['car' => $car]);
    }
    
    public function postEdit(Request $request, Car $car) {
        $car->update($request->all());
        
        $photes = Input::file('photo');
        foreach($photes as $item) {
            if ($item == null) {
                break;
            }
            
            $image = \Image::make($item->getRealPath());
            $image->save(storage_path('photos/' . $item->getClientOriginalName()));
            
            $car->photos()->create([
                'name' => $item->getClientOriginalName(),
                'hash' => sha1_file($item->getRealPath())
            ]);
        }
        
        $info = ['header' => 'Car-ID ' . $car->id, 'message' => 'Success updated!'];
        
        $remove = Input::get('remove');
        $remove_photos = [];
        if (!empty($remove)) {
            foreach ($remove as $key => $val) {
                array_push($remove_photos, $key);
            }
            Photo::destroy($remove_photos);
        }
        
        return \Redirect::route('cars', ['info' => $info]);
    }
    
    public function getDelete(Car $car) {
        $car->delete();
        
        $info = ['header' => 'Car-ID ' . $car->id, 'message' => 'Success deleted!'];
        
        return \Redirect::route('cars', ['info' => $info]);
    }
    
    public function getPhoto($filename) {
        return \Image::make(storage_path('photos/'  . $filename))->response('jpg');
        
        /*
        $path = storage_path('photos/'  . $filename);

        if(!\File::exists($path)) abort(404);
    
        $file = \File::get($path);
        $type = \File::mimeType($path);
    
        $response = \Response::make($file, 200);
        $response->header("Content-Type", $type);
    
        return $response;
        */
    }
    
    public function getThumbPhoto($filename) {
        return \Image::make(storage_path('photos/thumbs/'  . $filename))->response('jpg');
    }
    
    public function postParse(Request $request) {
        if (Input::hasFile('file')) {
            Input::file('file')->move(storage_path('temp'), 'file.xlsx');
            
            DB::table('cars')->truncate();
            
            $excel = \Excel::load(storage_path('temp/file.xlsx'), function($reader) {
                foreach ($reader->toArray() as $row) {
                    if (!empty($row['year']) && !empty($row['mileage']) && !empty($row['vin'])) {
                        $info = explode(' ', $row['year']);
                        Car::create([
                            'year' => $info[1],
                            'mileage' => $row['mileage'],
                            'vin' => $row['vin'],
                            'color' => $info[0],
                            'notes' => null,
                            'price' => 0
                        ]);
                    }
                }
            });
            
            $info = ['header' => 'Import', 'message' => 'Success completed!'];
        
            return \Redirect::route('cars', ['info' => $info]);
        } else {
            return 'Sorry, job fucked up';
        }
    }
}
