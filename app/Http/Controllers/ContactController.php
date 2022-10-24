<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('page.contact.contact');
    }
    public function _send(Request $request)
    {
        $send =   Mail::send(
            'page.mail.contact',
            array(
                "name" => trim(strip_tags(ucwords($request->name))),
                "email" => $request->email,
                "phone" => $request->phone,
                "address" => $request->address,
                "subject" => 'Liên hệ góp ý của khách hàng ',
                "msg" => trim(strip_tags($request->msg))
            ),
            function ($message) use ($request) {
                $message->subject("Thư liên hệ từ " . trim(strip_tags(ucwords($request->name))));
                $message->from($request->email);
                $message->to('tmpdz7820@gmail.com');
            }
        );
        if ($send) {
            return response()->json(['status' => 200]);
        }
    }
}
