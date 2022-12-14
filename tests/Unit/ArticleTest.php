<?php

namespace Tests\Unit;

use App\Models\Article;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use PHPUnit\Framework\TestCase;

class ArticleTest extends TestCase
{
   use DatabaseTransactions;

    public function it_fetches_trending_articles()
    {
        //Given
         Article::factory(2)->create();
         Article::factory()->create(['reads'=>10]);
        $mostPopular = Article::factory()->create(['reads'=>20]);

        $articles = Article::trending();

        $this->assertEquals($mostPopular->id , $articles->first()->id());
        $this->assertCount(3 , $articles);
    }
}
