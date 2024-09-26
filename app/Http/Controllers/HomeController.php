<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }
    
    public function about()
    {
        return view('about');
    }
    public function contact()
    {
        return view('contact');
    }
    public function application()
    {
        return view('application');
    }

    public function postContact(Request $request)
    {
        $input=$request->all();

        $contact= new Contact();

        $contact->firstName=$input['firstName'];
        $contact->lastName=$input['lastName'];
        $contact->Phone=$input['Phone'];
        $contact->email=$input['email'];
        $contact->subject=$input['subject'];
        $contact->message=$input['message'];


        $contact->save();

        return redirect()->back()->with('success', 'Your message has been sent successfully!');


        // dd($input);die;
    }

}
