<?php
namespace App\Http\Controllers;

use Session;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function showForm(Request $request){
        return view('Thank you for your booking');
    }

    public function storeForm(Request $request){

        $booking = new \App\Booking;
        $booking->location = $request->location;
        if ($booking->location == 'klcc'){
            $klcc_booking = new \App\KlccBooking;
            $klcc_booking->location = $request->location;
            $klcc_booking->date = $request->date;
            $klcc_booking->time = $request->time;
            $klcc_booking->adult_no = $request->adult_no;
            $klcc_booking->child_no = $request->child_no;
            $klcc_booking->name = $request->name;
            $klcc_booking->phone_no = $request->phone_no;
            $klcc_booking->special_request = $request->special_request;

            $klcc_booking->save();

        }elseif ($booking->location == 'ioi_putrajaya'){
            $ioi_putrajaya_booking = new \App\IoiPutrajayaBooking;
            $ioi_putrajaya_booking->location = $request->location;
            $ioi_putrajaya_booking->date = $request->date;
            $ioi_putrajaya_booking->time = $request->time;
            $ioi_putrajaya_booking->adult_no = $request->adult_no;
            $ioi_putrajaya_booking->child_no = $request->child_no;
            $ioi_putrajaya_booking->name = $request->name;
            $ioi_putrajaya_booking->phone_no = $request->phone_no;
            $ioi_putrajaya_booking->special_request = $request->special_request;

            $ioi_putrajaya_booking->save();

        }elseif ($booking->location == 'ioi_puchong'){
            $ioi_puchong_booking = new \App\IoiPuchongBooking;
            $ioi_puchong_booking->location = $request->location;
            $ioi_puchong_booking->date = $request->date;
            $ioi_puchong_booking->time = $request->time;
            $ioi_puchong_booking->adult_no = $request->adult_no;
            $ioi_puchong_booking->child_no = $request->child_no;
            $ioi_puchong_booking->name = $request->name;
            $ioi_puchong_booking->phone_no = $request->phone_no;
            $ioi_puchong_booking->special_request = $request->special_request;

            $ioi_puchong_booking->save();

        }elseif ($booking->location == 'wangsa_walk'){
            $wangsa_walk_booking = new \App\WangsaWalkBooking;
            $wangsa_walk_booking->location = $request->location;
            $wangsa_walk_booking->date = $request->date;
            $wangsa_walk_booking->time = $request->time;
            $wangsa_walk_booking->adult_no = $request->adult_no;
            $wangsa_walk_booking->child_no = $request->child_no;
            $wangsa_walk_booking->name = $request->name;
            $wangsa_walk_booking->phone_no = $request->phone_no;
            $wangsa_walk_booking->special_request = $request->special_request;

            $klcc_booking->save();

        }elseif ($booking->location == 'kb_mall'){
            $kb_mall_booking = new \App\KbMallBooking;
            $kb_mall_booking->location = $request->location;
            $kb_mall_booking->date = $request->date;
            $kb_mall_booking->time = $request->time;
            $kb_mall_booking->adult_no = $request->adult_no;
            $kb_mall_booking->child_no = $request->child_no;
            $kb_mall_booking->name = $request->name;
            $kb_mall_booking->phone_no = $request->phone_no;
            $kb_mall_booking->special_request = $request->special_request;

            $kb_mall_booking->save();

        }elseif ($booking->location == 'mesra_mall'){
            $mesra_mall_booking = new \App\MesraMallBooking;
            $mesra_mall_booking->location = $request->location;
            $mesra_mall_booking->date = $request->date;
            $mesra_mall_booking->time = $request->time;
            $mesra_mall_booking->adult_no = $request->adult_no;
            $mesra_mall_booking->child_no = $request->child_no;
            $mesra_mall_booking->name = $request->name;
            $mesra_mall_booking->phone_no = $request->phone_no;
            $mesra_mall_booking->special_request = $request->special_request;

            $mesra_mall_booking->save();

        }elseif ($booking->location == 'sunway_pyramid'){
            $sunway_pyramid_booking = new \App\SunwayPyramidBooking;
            $sunway_pyramid_booking->location = $request->location;
            $sunway_pyramid_booking->date = $request->date;
            $sunway_pyramid_booking->time = $request->time;
            $sunway_pyramid_booking->adult_no = $request->adult_no;
            $sunway_pyramid_booking->child_no = $request->child_no;
            $sunway_pyramid_booking->name = $request->name;
            $sunway_pyramid_booking->phone_no = $request->phone_no;
            $sunway_pyramid_booking->special_request = $request->special_request;

            $sunway_pyramid_booking->save();

        }
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
