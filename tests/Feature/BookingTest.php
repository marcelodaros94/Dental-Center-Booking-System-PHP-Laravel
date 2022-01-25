<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\MigrateFreshSeedOnce;
use Tests\TestCase;
use Carbon\Carbon;

class BookingTest extends TestCase
{
    use MigrateFreshSeedOnce;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testStoreBookingWithoutLogin()
    {
        $params = [
            'date' => '2022-01-24',
            'hour_id' => 1,
            'user_id' => 1
        ];
        $response = $this->json('POST', 'reservas', $params);
        $response->assertStatus(401);

        //checking redirect and session variables
        
        //$this->post('reservas', $params)
        //->assertSessionHas('errors'); 

        //$response->assertStatus(302);

        /*
        $this->assertDatabaseHas('bookings', [
            'hour_id' => 1
        ]);*/
    }
}
