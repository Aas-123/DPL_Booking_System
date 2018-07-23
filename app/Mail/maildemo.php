<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Customer;
use App\Booking;

class maildemo extends Mailable
{
    use Queueable, SerializesModels;

    protected $seat;
    protected $data = [];

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('rawalaashish20@gmail.com')
                    ->view('mail');
                    
    }

    public function sendTicketInformation(Booking $book)
    {
        $this->seat = $book->seat_number;
        $this->data = compact('book');

        return view('mail');
    }
}
