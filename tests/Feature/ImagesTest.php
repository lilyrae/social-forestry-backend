<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class ImagesTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function can_post_image_details()
    {
        $testData = [
            'address'       => 'test address',
            'landmark'      => 'test landmark',
            'geo_latitude'  => 62.58905,
            'geo_longitude' => 162.58905,
            'image_path'    => 'test/image/path' . time(),
        ];

        $response = $this->json('POST', 'api/plant/diseased/image/details', $testData);

        $response->assertStatus(200)
            ->assertJson([
                'success' => true,
            ]);

        $this->assertDatabaseHas('diseased_plant_images', $testData);
    }
}
