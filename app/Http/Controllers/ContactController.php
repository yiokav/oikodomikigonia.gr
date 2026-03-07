<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ContactController
{
    /**
     * Handle the contact form submission. Sends email via Microsoft SMTP.
     * Always redirects back to the #contact section.
     */
    public function store(Request $request): RedirectResponse
    {
        $validator = Validator::make($request->all(), [
            'name'    => ['required', 'string', 'max:255'],
            'email'   => ['required', 'email'],
            'subject' => ['required', 'string', 'max:255'],
            'message' => ['required', 'string', 'max:10000'],
        ], [
            'name.required'    => 'Παρακαλώ συμπληρώστε το όνομά σας.',
            'email.required'   => 'Παρακαλώ συμπληρώστε το email σας.',
            'email.email'      => 'Παρακαλώ εισάγετε έγκυρη διεύθυνση email.',
            'subject.required' => 'Παρακαλώ συμπληρώστε το θέμα.',
            'message.required' => 'Παρακαλώ γράψτε το μήνυμά σας.',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withFragment('contact')
                ->withErrors($validator)
                ->withInput();
        }

        $validated = $validator->validated();

        try {
            Mail::to(config('mail.from.address'))->send(new ContactFormMail(
                senderName:     $validated['name'],
                senderEmail:    $validated['email'],
                contactSubject: $validated['subject'],
                messageBody:    $validated['message'],
            ));
        } catch (\Throwable $e) {
            report($e);
            return redirect()->back()
                ->withFragment('contact')
                ->withInput()
                ->with('contact_error', 'Δεν μπορέσαμε να στείλουμε το μήνυμα. Δοκιμάστε ξανά αργότερα ή επικοινωνήστε μαζί μας με άλλο τρόπο.');
        }

        return redirect()->back()
            ->withFragment('contact')
            ->with('contact_success', 'Το μήνυμά σας εστάλη επιτυχώς. Θα επικοινωνήσουμε μαζί σας σύντομα.');
    }
}
