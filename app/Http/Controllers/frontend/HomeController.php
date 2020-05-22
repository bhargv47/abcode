<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function __construct()
    {
    }

    public function home()
    {

        $data['title'] = "abcode";
        $data['meta'] = "abcode";

        $data['js'] = array();
        $data['js_plugin'] = array();
        $data['css'] = array();
        $data['css_plugin'] = array();
        $data['funinit'] = array();
        return view('frontend.pages.home', $data);
    }
}
