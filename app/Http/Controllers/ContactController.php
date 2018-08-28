<?php

namespace App\Http\Controllers;

use App\Email;
use App\Mail\AvailableSubmission;
use App\Mail\ContactSubmission;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactFormRequest;
use App\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    //
    public function show()
    {
    	return view('contact');
    }

    public function mailToAdmin(Request $request)
    {

        $this->validate($request,[
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'present',
            'message' => 'required',
        ]);

        $data = $request->All();

        Mail::to('office_manager@oakbrookcommons.com')->cc('mattsmithsc@gmail.com')->send(new Contactsubmission($data));

    	return redirect('contact')->with('message', 'Thank you for contacting us, we will be in touch with you shortly. If you would like to reach us via phone, please give us a call at 518-371-0216');
    }

    public function mailAvailable(Request $request)
    {
        //dd($request->All());

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'present',
            'note' => 'present',
        ]);

        $data = $request->All(); 

        // Format the emails for date etc....

        Mail::to('office_manager@oakbrookcommons.com')->cc('mattsmithsc@gmail.com')->send(new Availablesubmission($data));

        return redirect ('/#availability')->with('message', 'Thank you for contacting us, we will be in touch with you shortly. If you would like to reach us via phone, please give us a call at 518-371-0216');
    }

}
