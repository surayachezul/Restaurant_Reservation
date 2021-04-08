<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function showForm(Request $request){
        return view('Thank you for your booking');
    }

    public function storeForm(Request $request){
        $this->validate($request, [
            'location' => 'required',
            'date' => 'required',
            'time' => 'required',
            'numb_of_adult' => 'required',
            'numb_of_child' => 'required',
            'name' => 'required',
            'phone_numb' => 'required',
            'special_request' => 'required'
        ]);

        BookATable::create($request->all());
    }
}
