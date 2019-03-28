<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('forms.index');
    }
    public function get_data($name)
    {
        return $name;
    }

    public function store(Request $request)
    {
        $input = $request->all();

        try{
            $data = Contact::create($input);

            return redirect('contact/create')->with('success', 'Contact Saved');
        } catch (\Exception $e){
            return redirect('contact/create')->with('error', 'Please Fill up this Form');
        }
    }

    public function contact_list()
    {
        $contacts = Contact::all();
        return view('pages/contact_list', compact('contacts'));
    }
}
