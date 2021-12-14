<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use PHPUnit\Framework\TestResult;
use Tests\TestCase;

class CommentTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

    public function test_add_comment()
    {
        $response = $this->json('POST', '/api/add-comment', [
            'article_id' => 2,
            'subject'  => 'Test',
            'body'  => time().'test@example.com',
        ]);

        $response->assertStatus(200);
    }
}
