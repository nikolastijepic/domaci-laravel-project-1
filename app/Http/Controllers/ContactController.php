<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function getAllContacts()
    {
        $allContacts = Contact::all();
        return view('all-contacts', compact('allContacts'));
    }

    public function sendContact(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'subject' => 'required|string',
            'message' => 'required|string|min:5']);

        echo "Email: " . $request->input('email') . " Subject: " . $request->input('subject') . " Message: " . $request->input('message');
        Contact::create([
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message
        ]);
    }

    public function deleteContact($contact)
    {
       $singleContact = Contact::where(['id' => $contact])->first();

        if ($singleContact === null)
        {
            die("Ovaj kontakt ne postoji!");
        }

        $singleContact->delete();

        return redirect()->back();
    }
}


