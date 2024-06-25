<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;

use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;

class BookAppointmentController extends Controller
{  
    public function sendEmail(Request $request){
        $rules = [
            'name' => 'required|max:255',
            'phone-no' => 'required',
            'date' => 'required', 
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
       
       
       
        // $validatedData = $request->validate([
        //     'name' => 'required|max:255',
        //     'email' => 'required|email',
        //     'message' => 'required',
        // ]);
       
        $data=[
            "name"=>$request->post('name'),
            "phone-no"=>$request->post('phone-no'), 
            "date"=>$request->post('date'),
        ];
        $recipient = 'jadhav.hemlata312@gmail.com';
        $subject = 'Appointment Message From Dr. Archana Jhawar';    

        Mail::send('emails.book-appointment', ['data' => $data], function ($message) use ($recipient, $subject) {
            $message->to($recipient)
                    ->subject($subject);
        });

        return redirect()->back()->with('success', 'We have received your query. thank you');
   
        // dd($data);
        // echo "next";         
    }            
}  