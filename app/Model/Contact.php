<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contact';
    public function contactdetails($request)
    {
        $objContact = new Contact();
        $contact = $request->toArray(); 
        $objContact->name = $contact['name'];
        $objContact->email = $contact['email'];
        $objContact->subject = $contact['subject'];
        $objContact->message = $contact['message'];
        $objContact->created_at = date("Y-m-d h:i:s");
        $objContact->updated_at = date("Y-m-d h:i:s");
        return $objContact->save();
    }



    public function getcontactlist()
    {
        $result = Contact::select("*")
            ->get()->toArray();
       
        return $result;
    }
}
