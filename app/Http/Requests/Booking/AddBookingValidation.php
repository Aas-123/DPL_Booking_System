<?php

namespace App\Http\Requests\Booking;

use Illuminate\Foundation\Http\FormRequest;


class AddBookingValidation extends FormRequest
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
            'Address' =>'required',
            'Phone_Number' => 'numeric',
            'feed_title'=>'unique:bookings,seat_number',
            

        ];
    }

    public function messages()
    {
    return [
        'Address.required'=>'Address is necessary',
        'feed_title.unique' => 'This seats are booked',
        
    ];
    }

}
