<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PaymentTest extends TestCase
{
    use RefreshDatabase;

    /** @test **/
    public function only_authenticated_user_can_see_payment_page()
    {
        // $this->withoutExceptionHandling();
        $painting = factory('App\Paintings')->create();
        $this->get('/payment/'.$painting->id)->assertRedirect('login');
    }
    /** @test **/
    public function only_real_bidder_can_purchase_painting()
    {
        // $this->withoutExceptionHandling();
        $this->actingAs($user = factory('App\User')->create());
        $painting = factory('App\Paintings')->create();
        $this->get('/payment/'.$painting->id)
        ->assertSee('You Can Not buy this painting!')
        ->assertStatus(403);

        $painting = factory('App\Paintings')->create(['bidder_id'=>auth()->id()]);
        $this->get('/payment/'.$painting->id)
        ->assertSee('You Can Not buy this painting!')
        ->assertStatus(403);

        $painting = factory('App\Paintings')->create(['bidder_id'=>auth()->id(),'status'=>1]);
        $this->get('/payment/'.$painting->id)
        ->assertSee($user->username)
        ->assertSee($painting->bidder_price)
        ->assertStatus(200);
    }
}
