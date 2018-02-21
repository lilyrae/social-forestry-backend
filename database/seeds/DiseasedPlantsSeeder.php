<?php

use App\Models\DiseasedPlantImage;
use Illuminate\Database\Seeder;

class DiseasedPlantsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	factory(DiseasedPlantImage::class, 20)->create();
    }
}
