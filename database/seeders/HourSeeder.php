<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Hour;

class HourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=9;$i<19;$i++){
            if($i!=13) Hour::factory()->withHour($i)->create();
        }
    }
}
