<?php

namespace Tests\Feature;

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
    /** @test **/
    public function an_autheticated_user_can_change_basic_details()
    {
        $this->withoutExceptionHandling();
        $this->actingAs($user = factory('App\User')->create());
        $this->get('/settings')->assertStatus(200);
        $user->username = 'thakkar123';
        $this->patch('/settings/basic', $user->toArray())
            ->assertRedirect('/settings')
            ->assertSessionHas('success_basic');
    }
    /** @test **/
    public function an_authenticated_user_can_change_email()
    {
        $this->withoutExceptionHandling();
        $this->actingAs($user = factory('App\User')->create());
        $this->get('/settings')->assertStatus(200);
        $user->email = 'thakkar123@yahho.com';
        $user->new_password = "password";
        $this->put('/settings/email', $user->toArray())
            ->assertRedirect('/settings')
            ->assertSessionHas('success_email');
    }
    /** @test **/
    public function in_order_to_change_email_right_password_is_required()
    {
        $this->withoutExceptionHandling();
        $this->actingAs($user = factory('App\User')->create());
        $this->get('/settings')->assertStatus(200);
        $user->email = 'thakkar123@yahho.com';
        $user->new_password = "password12";
        $this->put('/settings/email', $user->toArray())
            ->assertRedirect('/settings')
            ->assertSessionHasErrors('email_password_wrong');
    }
    /** @test **/
    public function an_authenticated_user_can_change_password()
    {
        $this->withoutExceptionHandling();
        $this->actingAs($user = factory('App\User')->create());
        $this->get('/settings')->assertStatus(200);
        $user->pass = 'password';
        $user->pass_confirmation = 'password';
        $user->new_password = 'Pass@123';
        $this->put('/settings/password', $user->toArray())
            ->assertRedirect('/settings')
            ->assertSessionHas('success_password');
    }
    /** @test **/
    public function In_order_to_change_password_you_have_to_confirm_password()
    {
        $this->withoutExceptionHandling();
        $this->actingAs($user = factory('App\User')->create());
        $this->get('/settings')->assertStatus(200);
        $user->pass = 'password';
        $user->pass_confirmation = 'password12';
        $user->new_password = 'Pass@123';
        $this->put('/settings/password', $user->toArray())
            ->assertRedirect('/settings')
            ->assertSessionHasErrors('password_confirmation_failed');
    }
    /** @test **/
    public function In_order_to_change_password_you_have_to_enter_correct_password_as_database()
    {
        $this->withoutExceptionHandling();
        $this->actingAs($user = factory('App\User')->create());
        $this->get('/settings')->assertStatus(200);
        $user->pass = 'password12';
        $user->pass_confirmation = 'password12';
        $user->new_password = 'Pass@123';
        $this->put('/settings/password', $user->toArray())
            ->assertRedirect('/settings')
            ->assertSessionHasErrors('entered_password_does_not_match_database');
    }
    /** @test **/
    public function In_order_to_change_password_you_have_to_enter_new_password_than_already_in_database()
    {
        $this->withoutExceptionHandling();
        $this->actingAs($user = factory('App\User')->create());
        $this->get('/settings')->assertStatus(200);
        $user->pass = 'password';
        $user->pass_confirmation = 'password';
        $user->new_password = 'password';
        $this->put('/settings/password', $user->toArray())
            ->assertRedirect('/settings')
            ->assertSessionHasErrors('entered_old_password');
    }
}
