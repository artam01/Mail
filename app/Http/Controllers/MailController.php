<?php

namespace App\Http\Controllers;

use App\Mail\SignUp;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendMail()
    {
        $name = 'John Doe';

        Mail::to('fake@gmail.com')->send(new Signup($name));

        return view('welcome');
    }
}
