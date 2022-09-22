<?php

namespace Yomi\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Yomi\Contact\Mail\ContactMail;
use Yomi\Contact\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact::contact');
    }

    public function store(Request $request)
    {
        // Information and data
        $message = $request->message;
        $name    = $request->name;
        $url     = Config::get('contact.url');
        $emailTo = Config::get('contact.send_email_to');
        // Validation
        $validated = $request->validate([
            'name'      => 'required|min:2|max:50',
            'email'     => 'required|email',
            'message'   => 'required|min:2|max:400'
        ]);
        // Send Message to mail
        Mail::to($emailTo)
            ->send(new ContactMail($message, $name,$url));
        // Send message to database
        $contact = Contact::create($request->all());
        // Return succsess message
        session()->flash('succsess', __("Your message has been sent successfully"));
        return view('contact::contact');
    }
}
