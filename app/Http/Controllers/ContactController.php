<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
// use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{
    public function submit(ContactRequest $req)
    {
        $contact = new Contact();
        $contact->name = $req['name'];
        $contact->email = $req['email'];
        $contact->subject = $req['subject'];
        $contact->message = $req['message'];

        $contact->save();

        return redirect()->route('home')->with('success', "Message was send.");
    }
}
