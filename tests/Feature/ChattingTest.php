<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ChattingTest extends TestCase
{
    use RefreshDatabase;
    /** @test **/
    public function only_authenticated_user_can_see_chatting_page()
    {
        $painting = factory('App\Paintings')->create();

        $this->get('chatting/1')->assertRedirect('login');
        $this->withoutExceptionHandling();

        $this->actingAs(factory('App\User')->create());

        $this->get('chatting/' . $painting->id)->assertStatus(200);
    }
    /** @test **/
    public function if_a_painting_is_sold_only_than_chatting_is_enable()
    {
        // $this->withoutExceptionHandling();
        $this->actingAs($user1 = factory('App\User')->create());

        $painting1 = factory('App\Paintings')->create(['owner_id' => $user1->id]);
        $this->get('chatting/' . $painting1->id)
            ->assertSee('This Painting is not sold Yet!')
            ->assertStatus(403);
    }
    /** @test **/
    public function only_bidder_or_owner_can_chat_about_a_painting()
    {
        // $this->withoutExceptionHandling();
        $this->actingAs($user1 = factory('App\User')->create());
        $user2 = factory('App\User')->create();

        $painting2 = factory('App\Paintings')->create(['owner_id' => $user2->id, 'status' => 1, 'bidder_id' => $user1->id]);

        $this->get('chatting/' . $painting2->id)
            ->assertStatus(200);

        $this->be(factory('App\User')->create());
        $this->get('chatting/' . $painting2->id)
            ->assertSee('You are not authorize to chat here!')
            ->assertStatus(403);
    }
}
