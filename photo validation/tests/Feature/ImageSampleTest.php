<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class ImageSampleTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testRequired()
    {
        $response = $this->post(route("save.image"), []);
        $response->assertSessionDoesntHaveErrors([
            'required'
        ]);
        $response
            ->assertStatus(302)
            ->assertSessionHasErrors([
                'file' => 'The file field is required.'
            ]);
    }

    public function testImage()
    {
        $file = UploadedFile::fake()->image('avatar.pdf');
        $response = $this->post(route("save.image"), [
            'file' => $file,
        ]);
        $response
            ->assertStatus(302)
            ->assertSessionHasErrors([
                'file' => 'The file must be an image.'
            ]);
    }

    public function testMimes()
    {
        $file = UploadedFile::fake()->image('avatar.bmp');
        $response = $this->post(route("save.image"), [
            'file' => $file,
        ]);
        $response
            ->assertStatus(302)
            ->assertSessionHasErrors([
                'file' => 'The file must be a file of type: jpeg, jpg, png.'
            ]);
    }
}
