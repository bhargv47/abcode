<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\model\Contact;

class DashboardController extends Controller
{
    function __construct()
    {
    }

    public function dashboard(Request $request){


        $objcontactlist = new Contact();
        $data['contactlist'] = $objcontactlist->getcontactlist();
        $data['title'] = "ABCODE || Admin-Login";
        $data['meta'] = "ABCODE || Admin-Login";
        $data['css'] = array(
            "datatables.bootstrap4.css",
            "responsive.bootstrap4.css",
            "buttons.bootstrap4.css",
            "select.bootstrap4.css",
        );
        $data['js'] = array(
            "jquery.datatables.min.js",
            "datatables.bootstrap4.js",
            "datatable-responsive.min.js",
            "responsive.bootstrap4.min.js",
            "datatable-button.min.js",
            "button.bootstrap4.min.js",
            "button.html5.min.js",
            "button.flash.min.js",
            "button.print.min.js",
            "datatables.keytable.min.js",
            "datatables.select.min.js",
            "demo.datatable-init.js",
        );

        $data['funinit'] = array();
        return view('backend.pages.dashboard', $data);
    }

       
}
