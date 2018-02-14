<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DiseasedPlantImage extends Model
{
	/**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'diseased_plant_images';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'image_path', 'address', 'landmark', 'geo_longitude', 'geo_latitude',
    ];
}
