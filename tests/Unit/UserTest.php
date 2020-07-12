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
}
