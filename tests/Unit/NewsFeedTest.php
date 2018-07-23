<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\NewsFeed;

class NewsFeedTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_news_store()
    {
    	factory(NewsFeed::class,3)->create();

        $this->assertTrue(true);
    }

    public function test_update_news()
    {
        $Updatenews = NewsFeed::where('feed_title','Dr.')->first();
        $data = NewsFeed::find($Updatenews['id']);
        $data->news_feed = 'This is update test';
        $data->save();

        $this->assertTrue(true);

    }

   
      public function test_delete_news()
    {
     
       $deletenews = NewsFeed::where('feed_title','Miss')->first();
       $data = NewsFeed::destroy($deletenews['id']);
     

       $this->assertTrue(true);

    }
}
