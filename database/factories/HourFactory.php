<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class HourFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
        ];
    }
    public function withHour($number){  
        return $this->state([    
            "range" => str_pad($number, 2, '0', STR_PAD_LEFT).':00'
        ]);
    }
}
