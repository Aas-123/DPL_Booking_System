<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Booking;
class BookingTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_booking_store()
    {
        factory(Booking::class)->create();

        $this->assertTrue(true);
    }
}
