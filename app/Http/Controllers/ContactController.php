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
        $validated = $request->validate([
            'email' => 'required|email|max:255',
            'subject' => 'required|string|min:3|max:100',
            'message' => 'required|string|min:5|max:1000'
        ]);

        Contact::create($validated);

        return redirect()->back()->with('success', 'Poruka je uspesno poslata.');
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
        $validated = $request->validate([
            'email' => 'required|email|max:255',
            'subject' => 'required|string|min:3|max:100',
            'message' => 'required|string|min:5|max:1000'
        ]);

        $contact->update($validated);

        return redirect()->route('all.contacts');
    }
}
