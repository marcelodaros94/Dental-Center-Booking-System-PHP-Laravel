<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Booking;
//use Illuminate\Validation\Rule;

class StoreBooking extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'date' => 'required|min:10|max:10',
            'hour_id' => ['required',function ($attribute, $value, $fail) {                      
                $booking=Booking::where(function ($query){
                        $query->where('date',$this->date);
                        $query->where('hour_id',$this->hour_id );
                    })->exists();  
                if($booking){
                    $fail('Otro usuario ya reservó esta hora. Intente con otra.');
                }
            }]
            //Rule::unique('bookings')->where(function ($query) {
               //return $query->where('date',$this->date);
            //})]
        ];
    }
}
