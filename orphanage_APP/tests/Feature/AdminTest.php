<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AdminTest extends TestCase
{
    /**
     * A basic feature for Admin page.
     *
     * @return void
     */

    public function testExample()
    {
        $response = $this->get('/login');
        $response->assertSee('ADMIN');
        $response->assertDontSee('Donor');
        $response->assertStatus(200);
    }
}
