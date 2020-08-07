<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ChattingTest extends TestCase
{
    use RefreshDatabase;
    /** @test **/
    public function an_authenticated_user_can_see_chatting_page()
    {
        $this->withoutExceptionHandling();
        $this->actingAs(factory('App\User')->create());

        $this->get('chatting')->assertStatus(200);
    }
}
