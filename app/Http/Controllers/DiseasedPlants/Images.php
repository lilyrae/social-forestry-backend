<?php

namespace App\Http\Controllers\DiseasedPlants;

use App\Http\Controllers\Controller;
use App\Models\DiseasedPlantImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class Images extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|max:2000',
        ]);

        $path = $request->file('image')->store('diseased-plants');

        return response()->json([
            'success' => true,
            'message' => 'You have successfully uploaded an image',
            'data' => [
                'image_path' => $path
            ]
        ]);
    }

    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'address'       => 'required|string|max:255',
            'landmark'      => 'required|string|max:255',
            'geo_latitude'  => 'required|numeric|min:-90|max:90',
            'geo_longitude' => 'required|numeric|min:-180|max:180',
            'image_path'    => 'required|unique:diseased_plant_images,image_path|string|max:255',
        ]);

        $diseasedPlantImage = DiseasedPlantImage::create($validatedData);

        return response()->json([
            'success' => true,
            'message' => 'You have successfully entered the image into our monitoring system. Thank you.',
            'data' => [
                'id' => $diseasedPlantImage->id
            ]
        ]);
    }
}
