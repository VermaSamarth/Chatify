<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContactsController extends Controller
{
    // -------------Display the Contacts-------------
    public function display_buddies(){
        $contacts = contact::where('user_id_1',Auth::user()->id)->get();
        // dd($contacts);
        return view('contacts',['contacts'=>$contacts]);
    }

    // -------------Add Contacts Form-------------
    public function add_contacts_form(){
        return view('form_contact');
    }

    // -------------Adding the Contacts-------------
    public function add_contacts(Request $request){
        $contacts = new contact;
        $user_details = User::where('name',$request->search)->get('id')->first();
        // dd($user_details['id']);
        // $contacts->
        $contacts->user_id_1 = Auth::user()->id;
        $contacts->user_id_2 = $user_details['id'];
        $contacts->save();
        return back();
        return view('form_contacts');
    }
}
