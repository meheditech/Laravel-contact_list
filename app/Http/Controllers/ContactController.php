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

    //Edit and Update
    public function edit($id)
    {
        $data = Contact::findOrFail($id);

        return view('forms.edit',compact('data'));
    }

    public function update(Request $request, $id)
    {
        $input = $request->all();
        $data = Contact::findOrFail($id);
        try{
            $data->update($input);
            $error=0;
        } catch (\Exception $e){
            $error=1;

        }
        if ($error==0)
            return redirect('contact')->with('success', 'Contact Update');
        else
            return redirect('contact')->with('error', 'Please Fill up this Form');

        return $data;
    }

    //DELETE
    public function delete($id){
        $data = Contact::findOrFail($id);
        $data->delete();
        return redirect('contact')->with('success', 'Contact Deleted Successfully');
    }
}
