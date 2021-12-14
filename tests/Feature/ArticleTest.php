<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ArticleTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_get_article()
    {
        $response = $this->json('GET', '/api/articles/5',);

        $response->assertStatus(200);
    }

    public function test_add_like()
    {
        $response = $this->json('POST', '/api/add-like', [
            "id" => 2
        ]);

        $response->assertStatus(200);
    }

    public function test_add_view()
    {
        $response = $this->json('POST', '/api/add-view', [
            "id" => 2
        ]);

        $response->assertStatus(200);
    }
}
