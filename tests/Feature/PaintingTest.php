<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PaintingTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    /** @test **/
    public function guests_can_view_image_gallery()
    {
        $this->withoutExceptionHandling();

        $response = $this->get('/image-gallery');
        $response->assertStatus(200);
    }
    /** @test **/
    public function guests_cannot_add_paintings()
    {
        // $this->withoutExceptionHandling();
        $attributes = factory('App\Paintings')->raw();
        $this->post('/paintings', $attributes)->assertRedirect('login');
    }
    /** @test **/
    public function guests_cannot_view_paintings()
    {
        $this->get('/paintings')->assertRedirect('login');
    }
    /** @test **/
    public function guests_cannot_view_a_single_painting()
    {
        $painting = factory('App\Paintings')->create();
        $this->get($painting->path())->assertRedirect('login');
    }
    /** @test **/
    public function a_user_can_add_a_painting()
    {
        $this->withoutExceptionHandling();
        $this->actingAs(factory('App\User')->create());

        $attributes = [
            'title' => $this->faker->sentence,
            'subtitle' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'painting_pic' => $this->faker->imageUrl(),
            'starting_price' => $this->faker->randomDigitNotNull,
            'ending_date' => $this->faker->date(),
        ];
        $this->post('/paintings', $attributes)->assertRedirect('/paintings');
        $this->assertDatabaseHas('paintings', $attributes);

        $this->get('/paintings', $attributes)->assertSee($attributes['title']);
    }
    /** @test **/
    public function a_user_can_bid_others_painting()
    {
        $this->withoutExceptionHandling();
        $this->actingAs(factory('App\User')->create());
        $painting = factory('App\Paintings')->create();
        $this->get($painting->path())
            ->assertSee($painting->title)
            ->assertSee($painting->subtitle)
            ->assertSee($painting->description)
            ->assertSee($painting->painting_pic)
            ->assertSee($painting->starting_price)
            ->assertSee($painting->ending_date);
    }
    /** @test **/
    public function an_authenticated_user_cannot_bid_their_paintings()
    {
        $this->be(factory('App\User')->create());
        // $this->withoutExceptionHandling();
        $painting = factory('App\Paintings')->create(['owner_id' => auth()->id()]);
        $this->get($painting->path())->assertStatus(403);
    }
    /** @test **/
    public function a_painting_requires_a_title()
    {
        $this->actingAs(factory('App\User')->create());
        $attributes = factory('App\Paintings')->raw(['title' => '']);
        $this->post('/paintings', $attributes)->assertSessionHasErrors('title');
    }
    /** @test **/
    public function a_painting_requires_a_subtitle()
    {
        $this->actingAs(factory('App\User')->create());

        $attributes = factory('App\Paintings')->raw(['subtitle' => '']);
        $this->post('/paintings', $attributes)->assertSessionHasErrors('subtitle');
    }
    /** @test **/
    public function a_painting_requires_a_description()
    {
        $this->actingAs(factory('App\User')->create());

        $attributes = factory('App\Paintings')->raw(['description' => '']);
        $this->post('/paintings', $attributes)->assertSessionHasErrors('description');
    }
    /** @test **/
    public function a_painting_requires_a_painting_pic()
    {
        $this->actingAs(factory('App\User')->create());

        $attributes = factory('App\Paintings')->raw(['painting_pic' => '']);
        $this->post('/paintings', $attributes)->assertSessionHasErrors('painting_pic');
    }
    /** @test **/
    public function a_painting_requires_a_starting_price()
    {
        $this->actingAs(factory('App\User')->create());

        $attributes = factory('App\Paintings')->raw(['starting_price' => '']);
        $this->post('/paintings', $attributes)->assertSessionHasErrors('starting_price');
    }
    /** @test **/
    public function a_painting_requires_a_ending_date()
    {
        $this->actingAs(factory('App\User')->create());

        $attributes = factory('App\Paintings')->raw(['ending_date' => '']);
        $this->post('/paintings', $attributes)->assertSessionHasErrors('ending_date');
    }
}
