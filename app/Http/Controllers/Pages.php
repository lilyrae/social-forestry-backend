<?php

namespace App\Http\Controllers;

use App\Models\DiseasedPlantImage;
use Illuminate\Http\Request;

class Pages extends Controller
{
    //
    public function diseasedPlants()
    {
    	$plants = DiseasedPlantImage::paginate(15);

    	return view('diseased-plants')->with('plants', $plants);
    }
}
