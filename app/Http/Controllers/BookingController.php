<?php
namespace App\Http\Controllers;

use Session;

use \App\Location;

use Illuminate\Http\Request;

class BookingController extends Controller
{

    public function index(){
        $locations = Location::all();
        return view('bookatable',
        [
            'locations' => $locations

        ]);

    }

    public function storeForm(Request $request){


        $booking = new \App\Booking;
        $booking->location = $request->location;
        $booking->date = $request->date;
        $booking->time = $request->time;
        $booking->adult_no = $request->adult_no;
        $booking->child_no = $request->child_no;
        $booking->name = $request->name;
        $booking->phone_no = $request->phone_no;
        $booking->special_request = $request->special_request;

        $booking->save();



                // $this->validate($request, [
        //     'location' => 'required',
        //     'date' => 'required',
        //     'time' => 'required',
        //     'numb_of_adult' => 'required',
        //     'numb_of_child' => 'required',
        //     'name' => 'required',
        //     'phone_numb' => 'required',
        //     'special_request' => 'required'
        // ]);

        // BookATable::create($request->all());
        
        Session::flash('flash_message', 'Booking is successful!');

        return redirect()->back();
    }
}
