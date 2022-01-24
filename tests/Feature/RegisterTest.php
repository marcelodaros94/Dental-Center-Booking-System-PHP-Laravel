<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Tests\MigrateFreshSeedOnce;

class RegisterTest extends TestCase
{
    //use RefreshDatabase;
    use MigrateFreshSeedOnce;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testRegisterPageIsWorkingCorrectly()
    {        
        $response = $this->get('/register');

        $response->assertStatus(200);
    }
}
