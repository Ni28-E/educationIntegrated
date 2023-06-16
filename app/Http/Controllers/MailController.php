<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMailRequest;
use App\Mail\contactEmails;
use Illuminate\Http\Request;
use Mail;

class MailController extends Controller
{
    //
    public function index()
    {
        /*$mailData = [
            'title' => 'Mail opgestuurd',
            'body' => 'This is for testing emails using smtp.'
        ];

        Mail::to('s1183699@student.windesheim.nl')->send(new contactEmails($mailData));

        dd("Email is sent successfully.");*/
        return view('contact');
    }

    public function create()
    {
        return view('contact');
    }

    public function store(StoreMailRequest $request)
    {
        // Validate and store the blog post...

        $mailData = [
            'title' => $request->subject,
            'body' => $request->information,
            'sender'=> $request->email
        ];
        Mail::to('s1183699@student.windesheim.nl')->send(new contactEmails($mailData));

        return to_route('contact');
    }
}
