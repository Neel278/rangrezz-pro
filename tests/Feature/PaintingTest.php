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
    public function a_user_can_add_a_painting()
    {
        $this->withoutExceptionHandling();
        $attributes = [
            'title' => $this->faker->sentence,
            'subtitle' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'painting_pic' => $this->faker->image(),
            'starting_price' => $this->faker->randomDigitNotNull,
            'ending_date' => $this->faker->date(),
        ];
        $this->post('/paintings', $attributes)->assertRedirect('/paintings');
        $this->assertDatabaseHas('paintings', $attributes);

        $this->get('/paintings', $attributes)->assertSee($attributes['title']);
    }
}
