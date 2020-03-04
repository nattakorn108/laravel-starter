<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HomepageTest extends TestCase
{
    use DatabaseMigrations, DatabaseTransactions;

    /**
     * Home Page visiting.
     *
     * @test
     */
    public function visit_home_page()
    {
        $response = $this->get('/');

        $response->assertSeeText(app_name());

        $response->assertStatus(200);
    }
}
