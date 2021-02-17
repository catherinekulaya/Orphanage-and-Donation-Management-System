<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RootUrlTest extends TestCase
{
    /**
     * A Test for Root Url availability.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('/');
        // This test ensure the keyword 'admin' shouldn't be seen on root page so as the donor not to access admin login page
        $response->assertDontSee('Admin');
        $response->assertStatus(200);
    }
}
