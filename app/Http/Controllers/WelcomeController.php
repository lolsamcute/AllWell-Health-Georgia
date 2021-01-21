<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Appointment;
use App\Contact;

class WelcomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('master');
    }

    public function about()
    {
        return view('about');
    }

    public function service()
    {
        return view('service');
    }


    public function rate_insurance()
    {
        return view('rate_insurance');
    }


    public function contact()
    {
        return view('contact');
    }

    public function contactPost(Request $request)
    {

//        validation
        $this->validate($request,[
            'name'=>'required',          
            'email'=>'required',                   
            'phone'=>'required',   
            'subject'=>'required',                   
            'message'=>'required'    
        ]);

        $contact = new Contact;
        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->phone = $request->input('phone');
        $contact->subject = $request->input('subject');
        $contact->message = $request->input('message');
        $contact->save();
        return back()->with('success',' Contact Created Successfully ');
    }



    public function appointmentPost(Request $request)
    {

//        validation
        $this->validate($request,[
            'name'=>'required',          
            'email'=>'required',                   
            'phone'=>'required',   
            'service'=>'required',                   
        ]);

        $appointment = new Appointment;
        $appointment->name = $request->input('name');
        $appointment->email = $request->input('email');
        $appointment->phone = $request->input('phone');
        $appointment->service = $request->input('service');
        $appointment->save();
        return back()->with('success',' Appointment booked Successfully, your will recieved an Email confirmation from our Team ');
    }



}
