<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;


class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contacts = Contact::all();
        return view('admin.contact.index', compact('contacts')); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $rules = [
            'first_name' => 'required',
            'email' => 'required|email|max:255',
            'phone' => 'required|digits_between:7,12',
        ];

        $messages = [
            'first_name.required' => 'Please enter your first name.',
            'email.required' => 'Please enter your email address.',
            'email.email' => 'The email address must be a valid email format.',
            'phone.required' => 'Please enter your phone number.',
            'phone.digits_between' => 'Phone number must be between 7 and 12 digits.',
        ];

        // Validate the request
        $request->validate($rules, $messages);

        $contact = new Contact();

        $contact->first_name = $request['first_name'];
        $contact->last_name = $request['last_name'];
        $contact->email = $request['email'];
        $contact->phone = $request['phone'];
        $contact->category = $request['category'];
        $contact->message = $request['message'];

        if($contact->save()) {
           
             $this->alert('Success','Thank you for submiting','success');
             return redirect()->route('contactUs');
           // return redirect()->route('contactUs')->with('message', 'Thank you for submitting');
        }
         return redirect()->back();
     
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }


    private function alert($msg, $body, $type)
    {
        session()->flash('alert', [
            'msg' => $msg,
            'body' => $body,
            'type' => $type
        ]);
    }
}
