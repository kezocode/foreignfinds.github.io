<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;


class ContactFormController extends Controller
{
    public function submit(Request $request)
{
    $validated = $request->validate([
        'email' => 'required|email',
        'subject' => 'required|min:3',
        'message' => 'required|min:10',
    ]);

    Log::info('Mail Data:', $validated);

    Mail::to('foreignfinds@example.com')->send(new ContactMail($validated));

    return back()->with('success', __('contact.thank_you'));
}
}
