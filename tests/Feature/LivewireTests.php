<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Livewire;

class LivewireTests extends TestCase
{
    use RefreshDatabase;

    /** @test **/
    public function an_authenticated_user_can_see_livewire()
    {
        // $this->withoutExceptionHandling();
        $this->actingAs(factory('App\User')->create());
        $painting = factory('App\Paintings')->create();
        $this->get($painting->path())->assertSeeLivewire('add-new-bid');
    }
    /** @test **/
    public function an_authenticated_user_can_update_bidding_price()
    {
        $this->withoutExceptionHandling();
        $this->actingAs(factory('App\User')->create());
        $painting = factory('App\Paintings')->create();
        // dd($painting);
        Livewire::test('add-new-bid', ['painting' => $painting])
            ->set('newBid', $painting->starting_price + 2)
            ->call('submit')
            ->assertSee('Bidded successfully updated.');
    }
}
