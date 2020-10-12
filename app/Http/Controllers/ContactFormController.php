<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\MailtrapExample;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    public function review()
    {
        return view('review');
    }

    public function reviewReply(Request $request)
    {
        $array = [
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ];

        Mail::to('anost-d16b75@inbox.mailtrap.io')->send(new MailtrapExample($array));
        echo 'OK';
    }
}
