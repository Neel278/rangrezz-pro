<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PaintingTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    /** @test **/
    public function an_unauthenticated_user_can_view_image_gallery()
    {
        $this->withoutExceptionHandling();

        $response = $this->get('/image-gallery');
        $response->assertStatus(200);
    }
    /** @test **/
    public function a_user_can_register()
    {
        $this->withoutExceptionHandling();

        $response = $this->get('/register');
        $response->assertStatus(200);
    }
    /** @test **/
    public function a_user_requires_a_lastname()
    {
        $this->withoutExceptionHandling();
        $this->post('register', [])->assertSessionHasErrors('lastname');
    }
}
