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

        Contact::create([
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message
        ]);
    }

    public function deleteContact(Contact $contact)
    {
        $contact->delete();

        return redirect()->back();
    }

    public function getContact(Contact $contact)
    {
        return view('edit-contact', compact('contact'));
    }

    public function editContact(Request $request, Contact $contact)
    {
        $request->validate([
            'email' => 'required|email',
            'subject' => 'required|string',
            'message' => 'required|string|min:5'
        ]);

        $contact->update([
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message
        ]);

        return redirect()->route('all.contacts');
    }
}
