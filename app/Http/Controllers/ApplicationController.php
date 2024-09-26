<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'firstName' => 'required|max:255',
            'lastName' => 'required|max:255',
            'phone' => 'required|max:15',
            'email' => 'required|email|unique:applications,email',
            'education' => 'required',
            'course' => 'required',
        ]);

        Application::create([
            'first_name' => $validatedData['firstName'],
            'last_name' => $validatedData['lastName'],
            'phone' => $validatedData['phone'],
            'email' => $validatedData['email'],
            'education' => $validatedData['education'],
            'course' => $validatedData['course'],
        ]);

        return redirect()->back()->with('success', 'Application submitted successfully!');
    }
}
