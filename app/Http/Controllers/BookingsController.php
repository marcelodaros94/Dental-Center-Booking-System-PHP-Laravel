<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Hour;
use App\Http\Requests\StoreBooking;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Auth;
use App\Services\Counter;

class BookingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $currentuser = Auth::user();
        return view('bookings.index', [
            'bookings'=>Booking::where('user_id',$currentuser->id)->get()/*,
            'counter'=>$counter*/
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $counter = resolve(Counter::class);

        return view('bookings.create', [
            'hours'=>Hour::all(),
            'counter' => $counter->increment("booking")
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBooking $request)
    {
        $validated=$request->validated();
        $booking=new Booking;
        $booking->date=$validated['date'];
        $booking->hour_id=$validated['hour'];
        $booking->user_id=$request->user()->id;
        $booking->save();
        $request->session()->flash('status', 'La reserva fue creada con éxito');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
