<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class BlogTest extends TestCase
{
    public function test_example(): void
    {
        $route = route('blog-page');

        // $route->assertStatus(200);
    }
}
