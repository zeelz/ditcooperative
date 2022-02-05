<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\NewRegistration;


class NewRegistrationController extends Controller
{
    public function index()
    {

        $this->sendNewRegistrationMail();
        

        return view('mails/newreg')->with('name', 'John Wikina');

        // $recipient = "hello@ditcooperative.com";

        // Mail::to($recipient)->send(new NewRegistration("lagos"));
        // return "mail sent";
    }

    public function sendNewRegistrationMail()
    {
        dd("hello gee");
    }
    

}