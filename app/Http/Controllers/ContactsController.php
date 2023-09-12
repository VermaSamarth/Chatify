<?php

namespace App\Http\Controllers;

use App\Models\contact;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    // -------------Display the Contacts-------------
    public function display_contacts(){
        $contacts = contact::all();
        return view('contacts',['contacts'=>$contacts]);
    }

    // -------------Add Contacts Form-------------
    public function add_contacts_form(){
        return view('form_contact');
    }

    // -------------Adding the Contacts-------------
    public function add_contacts(Request $request){
        $contacts = new contact;
        // $contacts->
        return view('form_contacts');
    }
}
