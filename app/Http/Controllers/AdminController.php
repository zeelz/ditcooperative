<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Admin;

class AdminController extends Controller
{
    // public function register(Request $request)
    // {
    //     return view('admin.register');
    // }

    public function login(Request $request)
    {
        return view('admin.login');
    }

    public function authenticate(Request $request)
    {

        $admin = Admin::where('email', $request->email)->first();

        if($admin){
            // check password
            if(Hash::check($request->password, $admin->password)){
                $request->session()->put('LoggedAdmin', $admin->id);
                return redirect('admin');
            } else {
                return back()->with('fail', 'Invalid email or passowrd');
                // return 'pwd invalid';

            }
        } else {
            return back()->with('fail', 'Invalid email or passowrd');
            // return 'email incorrect';
        }
    }


    public function logout()
    {
        if(Session::has('LoggedAdmin')){
            Session::pull('LoggedAdmin');
        }
        return redirect('admin.login');
    }


}
