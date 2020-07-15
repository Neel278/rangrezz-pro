<?php

namespace Tests\Unit;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;


class UserTest extends TestCase
{
    use RefreshDatabase;
    /** @test **/
    public function a_user_have_paintings()
    {
        // $this->withoutExceptionHandling();
        $user = factory('App\User')->create();
        $this->assertInstanceOf(Collection::class, $user->paintings);
    }
    /** @test **/
    public function an_authenticated_user_can_see_settings_page()
    {
        $this->withoutExceptionHandling();
        $this->actingAs(factory('App\User')->create());
        $this->get('/settings')->assertStatus(200);
        $this->get('/settings')
            ->assertSee(auth()->user()->firstname)
            ->assertSee(auth()->user()->lastname)
            ->assertSee(auth()->user()->address)
            ->assertSee(auth()->user()->address)
            ->assertSee(auth()->user()->email);
    }
}
