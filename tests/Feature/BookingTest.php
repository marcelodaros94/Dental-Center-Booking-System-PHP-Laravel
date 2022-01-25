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
        $response->assertUnauthorized();

        //checking redirect and session variables
        
        //$this->post('reservas', $params)
        //->assertSessionHas('errors'); 

        //$response->assertStatus(302);

        /*
        $this->assertDatabaseHas('bookings', [
            'hour_id' => 1
        ]);*/
    }
    public function testStoreBookingWithLogin()
    {
        $user = \App\Models\User::factory(User::class)->make()->first();

        $params = [
            'date' => '2022-01-24',
            'hour_id' => 1,
            'user_id' => 1
        ];

        $this->actingAs($user)->json('POST', 'reservas', $params)
        ->assertSessionHas('status')
        ->assertStatus(302);

        $this->assertEquals(session('status'), 'La reserva fue creada con éxito');
    }
}
