<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiseasedPlantImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diseased_plant_images', function (Blueprint $table) {
            $table->increments('id');
            $table->text('image_path');
            $table->text('address');
            $table->text('landmark');
            $table->decimal('geo_latitude', 7, 5);
            $table->decimal('geo_longitude', 8, 5);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('diseased_plant_images');
    }
}
