<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Booking;

class Hour extends Model
{
    use HasFactory;

    //one to one
    public function booking()
    {
        return $this->hasOne(Booking::class);
    }
}
