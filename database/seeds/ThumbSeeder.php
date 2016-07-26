<?php

use Illuminate\Database\Seeder;

use App\Car;

class ThumbSeeder extends Seeder
{
    public function run()
    {
        $cars = Car::get();
        
        foreach ($cars as $car) {
            $photos = $car->photos;
            foreach ($photos as $photo) {
                if (!empty($photo)) {
                    \Image::make(storage_path('photos/'  . $photo->name))->resize(300, null, function($constraint) {
                        $constraint->aspectRatio();
                    })->save(storage_path('photos/thumbs/' . $photo->name));
                }
            }
        }
    }
}
