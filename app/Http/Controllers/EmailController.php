<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Validator;
class EmailController extends Controller
{
    public function create()
    {
        return view('email');
    }

    public function sendEmail(Request $request)
    {
       
        $validation = Validator::make($request->all(), [
            'name'=>'required',
          'email' => 'required|email',
          'subject' => 'required',
          'phone' => 'required',
          'content' => 'required',
        ]);
        if ($validation->fails()) {
            return response()->json(['code' => 400, 'msg' => $validation->errors()->first()]);
        }
        $data = [
          'subject' => $request->subject,
          'phone'=>$request->phone,
          'name' => $request->name,
          'email' => $request->email,
          'content' => $request->content,
        ];

        Mail::send('email-template', $data, function($message) use ($data) {
          $message->to('sushilkc18123@gmail.com')
          ->subject($data['subject']);
        });
        return response()->json(['code' => 200, 'msg' => 'Thanks for contacting us, we will get back to you soon.']);
    }
}
