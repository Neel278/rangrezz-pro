<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;


class PaintingTest extends TestCase
{
    use RefreshDatabase;
    /** @test **/
    public function it_has_a_path()
    {
        // $this->withoutExceptionHandling();
        $painting = factory('App\Paintings')->create();

        $this->assertEquals('/paintings/' . $painting->id, $painting->path());
    }
    /** @test **/
    public function it_belongs_to_an_owner()
    {
        $this->withoutExceptionHandling();
        $painting = factory('App\Paintings')->create();
        $this->assertInstanceOf('App\User', $painting->owner);
    }
}
