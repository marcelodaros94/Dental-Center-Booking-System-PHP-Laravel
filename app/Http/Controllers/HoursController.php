<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Hour;
use App\Http\Requests\StoreBooking;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Auth;
use App\Services\Counter;

use Illuminate\Support\Facades\DB;

class HoursController extends Controller
{
    public function available(Request $request){  
        $hours = DB::table('hours')
        ->leftJoin('bookings', 'hours.id', '=', 'bookings.hour_id')
        ->select('hours.*')
        ->whereNull('date')
        ->orWhere('date', '!=', $request->date)
        ->orderBy('hours.id', 'asc')
        ->get();
        return json_encode($hours);
    }
}
