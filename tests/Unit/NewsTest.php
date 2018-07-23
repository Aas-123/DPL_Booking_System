<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Result;
use Illuminate\Support\Facades\DB;


class NewsTest extends TestCase
{
	
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_result_store()
    {
    	factory(Result::class,3)->create();

    	$this->assertTrue(true);
    	
    }
}
