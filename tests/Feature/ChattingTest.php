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
}
