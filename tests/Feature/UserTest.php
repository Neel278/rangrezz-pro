<?php

namespace Tests\Feature;

use App\Paintings;
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
            ->assertSee(auth()->user()->username)
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
    /** @test **/
    public function an_autheticated_user_can_see_their_profiles()
    {
        $this->withoutExceptionHandling();
        $this->actingAs(factory('App\User')->create());
        $this->get('/profile')->assertStatus(200);
    }
    /** @test **/
    public function an_autheticated_user_can_see_their_profile_details()
    {
        $this->withoutExceptionHandling();
        $this->actingAs(factory('App\User')->create());
        $this->get('/profile')
            ->assertSee(auth()->user()->firstname)
            ->assertSee(auth()->user()->lastname)
            ->assertSee(auth()->user()->address)
            ->assertSee(auth()->user()->birthdate)
            ->assertSee(auth()->user()->email)
            ->assertSee(auth()->user()->username);
    }
    /** @test **/
    public function an_autheticated_user_can_see_any_other_user_profiles()
    {
        $this->withoutExceptionHandling();
        $this->actingAs(factory('App\User')->create());
        $user = factory('App\User')->create();
        $this->get($user->profile_path())->assertStatus(200);
    }
    /** @test **/
    public function an_autheticated_user_can_see_any_other_user_profile_details()
    {
        $this->withoutExceptionHandling();
        $this->actingAs(factory('App\User')->create());
        $user = factory('App\User')->create();
        $this->get($user->profile_path())
            ->assertSee($user->firstname)
            ->assertSee($user->lastname)
            ->assertSee($user->address)
            ->assertSee($user->birthdate)
            ->assertSee($user->email)
            ->assertSee($user->username);
    }
    /** @test **/
    public function an_autheticated_user_cannot_see_his_profile_same_as_other_profile_path()
    {
        $this->withoutExceptionHandling();
        $this->actingAs($user = factory('App\User')->create());
        $this->get($user->profile_path())->assertRedirect('/profile');
    }
    /** @test **/
    public function an_authenticated_user_can_see_activity_of_their_account()
    {
        $this->withoutExceptionHandling();
        $this->actingAs(factory('App\User')->create());
        $this->get('/activities')
            ->assertStatus(200)
            ->assertSee('Settings');
    }
    /** @test **/
    public function on_solded_page_you_can_see_all_the_paintings_that_are_sold()
    {
        $this->withoutExceptionHandling();
        $this->actingAs(factory('App\User')->create());
        $painting = factory('App\Paintings')->create(['owner_id' => auth()->id(), 'status' => 1]);
        // dd($painting,$solded_painting);
        $this->get('/activities/solded')
            ->assertSee($painting->title)
            ->assertSee($painting->starting_price)
            ->assertSee($painting->bidding_price)
            ->assertSee($painting->ending_date);
    }
    /** @test **/
    public function on_winning_page_user_can_see_their_won_bids()
    {
        $this->withoutExceptionHandling();
        $this->actingAs(factory('App\User')->create());
        $painting = factory('App\Paintings')->create(['bidder_id' => auth()->id(), 'status' => 1]);
        $painting->bidding_price = $painting->starting_price + 2;
        $this->get('/activities/won')
            ->assertSee($painting->title)
            ->assertSee($painting->starting_price)
            ->assertSee($painting->bidding_price)
            ->assertSee($painting->ending_date);
    }
}
