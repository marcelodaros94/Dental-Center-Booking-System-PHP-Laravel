<?php

namespace App\Models;

use App\Scopes\LatestScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Hour;

class Booking extends Model
{
    use HasFactory;

    public static function boot(){//executed automatically by Laravel
        parent::boot();        
        static::addGlobalScope(new LatestScope);
    }

    //one to many inverse
    public function User()
    {
        return $this->belongsTo(User::class);
    }
    //one to one inverse
    public function Hour()
    {
        return $this->belongsTo(Hour::class);
    }
}
