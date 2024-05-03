<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Http\Requests\CustomContactRequest;


class ContactController extends Controller
{
    public function store(CustomContactRequest $request)
    {
        $contact = new Contact();
        $contact->email = $request->input('email');
        $contact->name = $request->input('name');
        $contact->subject = $request->input('subject');
        $contact->message = $request->input('message');
        $contact->save();

        return redirect()->route('inicio')->with('success_message', 'Tu mensaje ha sido recibido. En breve me pondré en contacto contigo.');
    }
}
