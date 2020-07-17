<?php

namespace Tests\Feature;

use App\Http\Livewire\AddLike;
use App\Http\Livewire\FollowUser;
use App\Like;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Livewire;

class LivewireTests extends TestCase
{
    use RefreshDatabase;

    /** @test **/
    public function an_authenticated_user_can_see_bid_button()
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
    /** @test **/
    public function on_index_page_user_can_see_like_button()
    {
        $this->withoutExceptionHandling();
        Livewire::actingAs(factory('App\User')->create());
        $painting = factory('App\Paintings')->create();
        $this->get('/paintings')->assertSeeLivewire('add-like');
    }
    /** @test **/
    public function an_authenticated_user_can_like_a_painting()
    {
        $this->withoutExceptionHandling();
        // $this->actingAs();
        Livewire::actingAs(factory('App\User')->create());
        $painting = factory('App\Paintings')->create();
        Livewire::test(AddLike::class, ['painting_id' => $painting->id])
            ->assertSeeHtml('<a href="#" wire:click.prevent=likes><i class="material-icons">favorite_border</i></a>')
            ->call('likes');
        $this->assertTrue(Like::where([['painting_id', $painting->id], ['user_id', auth()->id()]])->exists());
    }
    /** @test **/
    public function an_authenticated_user_can_see_follow_user_button()
    {
        $this->withoutExceptionHandling();
        $this->actingAs(factory('App\User')->create());
        $painting = factory('App\Paintings')->create();
        $this->get('/paintings')->assertSeeLivewire('follow-user');
    }
    /** @test **/
    public function an_authenticated_user_can_follow_the_paintings_creator()
    {
        $this->withoutExceptionHandling();
        Livewire::actingAs(factory('App\User')->create());
        $painting = factory('App\Paintings')->create();
        Livewire::test(FollowUser::class, ['followed_id' => $painting->owner_id])
            ->assertSeeHtml('<a href="#" wire:click.prevent=follow><i class="material-icons">person</i></a>')
            ->call('follow');
        $this->assertTrue(Follow::where([['followed_id', $painting->owner_id], ['follower_id', auth()->id()]])->exists());
    }
}
