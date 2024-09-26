<?php

// app/Http/Controllers/ContactController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function submitForm(Request $request)
    {
        // Validate form data
        $validated = $request->validate([
            'firstName' => 'required|string|max:255',
            'lastName' => 'required|string|max:255',
            'Phone' => 'required|digits:10',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Create new Contact entry in the database
        Contact::create($validated);

        // Redirect or return success message
        return redirect()->back()->with('success', 'Message sent successfully!');
    }
}
