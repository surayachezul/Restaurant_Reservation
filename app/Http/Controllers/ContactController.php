<?php
namespace App\Http\Controllers;

use Session;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function showForm(Request $request){
        return view('Thank You');
    }

    public function storeForm(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'phone_numb' => 'required',
            'date' => 'required',
            'title' => 'required',
            'message' => 'required'
       ]);

        //\App\Message::create($request->all());
            

        $message = new \App\Message;
        $message->name = $request->name;
        $message->phone_numb = $request->phone_numb;
        $message->date = $request->date;
        $message->title = $request->title;
        $message->message = $request->message;

        $message->save();

        Session::flash('flash_message', 'Task successfully added!');

        return redirect()->back();
        //return view();


        
    }
}
