<?php

namespace App\Http\Controllers\Booking;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Booking;
use App\Customer;
use App\Mail\maildemo;
use App\Http\Requests\Booking\AddBookingValidation;

class BookingController extends Controller
{
	protected $view_path = 'admin.adminwork';
    protected $view_model = 'admin.model';
    protected $customer_path = 'customer.customerwork';

    public function book()
    {
    	return 'Booking page';
    }

     public function admin()
    {
    	$user = User::all();
        return view($this->view_path.'.admin',compact('user'));
    }

    public function addmodel()
    {
         return view($this->view_model.'.addadmin');
    }

    public function insert(Request $request)
    {
        $admin = new User;
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->password = Hash::make($request->password);
        $admin->save();
        return redirect()->route('adminwork.admin');


    }

    public function booking()
    {
        return view($this->customer_path.'.booking');
    }

    public function seat()
    {
        return view($this->customer_path.'.stadiumbooking');
    }

    public function bookformAS()
    {
        return view($this->customer_path.'.booking');
    }

    public function bookinsert(AddBookingValidation $request)
    {
        $booking = new Booking;
        $booking->Adderess = $request->Address;
        $booking->Phone_Number = $request->phone;
        $booking->seat_number = $request->feed_title;
        $booking->no_of_seat = $request->total_seat;
        $booking->total_price = $request->amt;
        $booking->customer_id = Auth::guard('customer')->user()->id;
        $booking->email = Auth::guard('customer')->user()->email;
        $booking->save();
        return redirect()->route('customer.home');
     
      }

      public function bookstatus()
      {
         $bookstatus = Booking::all();
          return view($this->view_path.'.bookingstatus',compact('bookstatus'));
      }

      public function sendmail($id)
      {
         $booking = Booking::find($id);
         $email = $booking->email;

         \Mail::to($email)->send(new maildemo());
         $booking->status = 1;
         $booking->save();
          return redirect()->route('admin.bookstatus');
      }

       public function changepassword()
       {
        return view($this->customer_path.'.changepassword');
       }

       public function updatepassword(Request $request, $id)
       {
            $task = Customer::find($id);
            $task->password = Hash::make($request->cpassword);
            $task->save();

            return view('customerhome');


         }
}
