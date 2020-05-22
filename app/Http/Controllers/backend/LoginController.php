<?php

namespace App\Http\Controllers\backend;

use Redirect;
use App\Model\Users;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;

class LoginController extends Controller
{
    function __construct()
    {
    }
    public function login(Request $request)
    {
        if ($request->isMethod('post')) {
     
            if (Auth::guard('admin')->attempt(['email' => $request->input('email'), 'password' => $request->input('password'), 'usertype' => "Admin"])) {

                $loginData = array(
                    'fname' => Auth::guard('admin')->user()->fname,
                    'lname' => Auth::guard('admin')->user()->lname,
                    'email' => Auth::guard('admin')->user()->email,
                    'image' => Auth::guard('admin')->user()->image,
                    'usertype' => Auth::guard('admin')->user()->usertype,
                    'id' => Auth::guard('admin')->user()->id
                );
                Session::forget('logindata');
                Session::push('logindata', $loginData);
                $request->session()->flash('session_success', 'User Login successfully.');
                return redirect()->route('dashboard');
                
            } else {
                return redirect()->route('admin')->with('status', 'Invalid Login Id / Password');;

                //                $request->session()->flash('session_error', 'Your username and password are wrong. Please login with correct credential...!!');
                //                return redirect()->route('admin');
            }
         
        }
        $data['title'] = "ABCODE || Admin-Login";
        $data['meta'] = "ABCODE || Admin-Login";
        $data['css'] = array( );
        $data['css_plugin'] = array();
        $data['js'] = array( );
        $data['pluginjs'] = array();

        $data['funinit'] = array();
        return view('backend.pages.login.login', $data);
    }


    public function createpassword(Request $request)
    {
        print_r(Hash::make('123'));
    }

    public function logout(Request $request)
    {
        $this->resetGuard();
        return redirect()->route('admin');
    }

    public function resetGuard()
    {
        Auth::logout();
        Auth::guard('admin')->logout();
        Session::forget('logindata');
    }
}
