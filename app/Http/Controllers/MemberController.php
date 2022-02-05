<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Code;
use App\Models\Tester;
use Illuminate\Support\Facades\Mail;
use App\Mail\NewRegistration;

class MemberController extends Controller
{
    public function index()
    {

    //    return view('auth/member-form');
        return redirect('/');

        $user_code = Code::where('code', 'ju84659td2')->first();
        
        // User::find(auth()->user()->id)->code->code;

        // $user_code = 

        dd($user_code->code);

    }

    public function create(Request $request)
    {

        $referrerCode = null;
       
        if ($request->referral_code) {

            $fcode = Code::where('code', $request->referral_code)->first();

            if($fcode && $request->referral_code === $fcode->code) {
               
                
                $referrerCode  = $fcode->user_id;
                            

            } else {
                return back()->with('error', 'Your referral code is invalid! Please, enter a valid one or leave blank.');
            }
        }

         // transform storage link to public link
        $file_name = $request->file('passport')->store('public/img');
        $name_bits = explode("/", $file_name);
        $passport_url = implode("/", ["storage", $name_bits[1], $name_bits[2]]);

         // transform storage link to public link
        $file_name = $request->file('payment_confirm')->store('public/img');
        $name_bits = explode("/", $file_name);
        $payment_confirm_url = implode("/", ["storage", $name_bits[1], $name_bits[2]]);

        $member = new User;
        $member->firstname = $request->firstname;
        $member->lastname = $request->lastname;
        $member->middlename = $request->middlename;
        $member->phone = $request->phone;
        $member->email = $request->email; 
        $member->password = Hash::make($request->password);
        $member->referrer_name = $request->referrer_name;
        $member->kin_name = $request->kin_name;
        $member->kin_phone = $request->kin_phone;
        $member->account_number = $request->account_number;
        $member->bank = $request->bank;
        $member->date_of_payment = $request->date_of_payment;
        $member->agree_100k = $request->agree_100k;
        $member->agree_10_percent = $request->agree_10_percent;
        $member->agree_no_advert = $request->agree_no_advert;
        $member->agree_no_refund = $request->agree_no_refund;
        $member->agree_not_liable = $request->agree_not_liable;
        $member->agree_required_info = $request->agree_required_info;
        $member->agree_terms = $request->agree_terms;
        $member->passport_url = $passport_url;
        $member->payment_confirm_url = $payment_confirm_url;

        $member->referrer = $referrerCode;

        $member_save = $member->save();

        $code = new Code;
        $code->user_id = $member->id;
        $code->code = Str::random(10);
        $code_save = $code->save();

        if ($member_save && $code_save) {

            // construct member data to be passed to mailable
            $member_data = [
                'name' => $member->firstname ." ".  $member->lastname,
                'phone' => $member->phone,
                'email' => $member->email,
                'referrer_name' => $member->referrer_name,
                'kin_name' => $member->kin_name,
                'kin_phone' => $member->kin_phone,
                'account_number' => $member->account_number,
                'bank' => $member->bank,
                'date_of_payment' => $member->date_of_payment,
                'code' => $code->code
            ];



            // send mail here //
            $this->sendNewRegistrationMail($member_data);

            return back()->with('success', 'Your account has been created');
        } else {
            return  "Registration failed";
        }
        

    }

    public function sendNewRegistrationMail($md)
    {
        // return view('mails/newreg')->with('name', 'John Wikina');

        $recipient = "hello@ditcooperative.com";

        Mail::to($recipient)->send(new NewRegistration($md));
        // return "mail sent";
    }
}