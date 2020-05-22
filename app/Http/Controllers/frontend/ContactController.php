<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Model\Contact;
class ContactController extends Controller
{

    function __construct()
    {
    }

    public function index(Request $request)
    {
      

        if ($request->isMethod('post')) {
            $objContact = new Contact();
            $result = $objContact->contactdetails($request);

            if ($result) {
                $return['status'] = 'success';
                $return['message'] = "Thanks for contact us! We will contact you soon...";
            } else {
                $return['status'] = 'error';
                $return['message'] = "Something Wrong";
            }
            echo json_encode($return);
            exit;
        }
        
    }
}
