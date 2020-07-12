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
    /** @test **/
    public function a_painting_requires_a_title()
    {
        $attributes = factory('App\Paintings')->raw(['title' => '']);
        $this->post('/paintings', $attributes)->assertSessionHasErrors('title');
    }
    /** @test **/
    public function a_painting_requires_a_subtitle()
    {
        $attributes = factory('App\Paintings')->raw(['subtitle' => '']);
        $this->post('/paintings', $attributes)->assertSessionHasErrors('subtitle');
    }
    /** @test **/
    public function a_painting_requires_a_description()
    {
        $attributes = factory('App\Paintings')->raw(['description' => '']);
        $this->post('/paintings', $attributes)->assertSessionHasErrors('description');
    }
    /** @test **/
    public function a_painting_requires_a_painting_pic()
    {
        $attributes = factory('App\Paintings')->raw(['painting_pic' => '']);
        $this->post('/paintings', $attributes)->assertSessionHasErrors('painting_pic');
    }
    /** @test **/
    public function a_painting_requires_a_starting_price()
    {
        $attributes = factory('App\Paintings')->raw(['starting_price' => '']);
        $this->post('/paintings', $attributes)->assertSessionHasErrors('starting_price');
    }
    /** @test **/
    public function a_painting_requires_a_ending_date()
    {
        $attributes = factory('App\Paintings')->raw(['ending_date' => '']);
        $this->post('/paintings', $attributes)->assertSessionHasErrors('ending_date');
    }
}
