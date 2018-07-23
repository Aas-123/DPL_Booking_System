<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Point;

class PointTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_points_store()
    {
    	factory(Point::class,3)->create();

        $this->assertTrue(true);
    }
}
