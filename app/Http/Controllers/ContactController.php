<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\Http\Requests\ContactValidation;

class ContactController extends Controller
{

    public function index (Request $request){
        $contacts = Contact::get();
        return view('contacts.index', compact('contacts'));
    }

    public function create () {
        return view('contacts.create');
    }

    public function store (ContactValidation $request) {

        /*
        Contact::create([
            'name'=>$request->get('name'),
            'address'=>$request->get('address'),
            'phone'=>$request->get('phone'),
        ]);
        return redirect()->back();
        */

        Contact::create($request->all());
        return redirect()->back();
    }

    public function edit ($id) {
        $contacts = Contact::findOrFail($id);
        return view('contacts.edit', compact('contacts'));
    }

    public function update ($id) {
        $contacts = Contact::find($id);
        $contacts->name = request('name');
        $contacts->address = request('address');
        $contacts->phone = request('phone');
        $contacts->save();
        return redirect()->to('/contacts');
    }

    public function show ($id) {
        $contacts = Contact::find($id);
        return view('contacts.show', compact('contacts'));
    }

    public function destroy ($id) {
        $contacts = Contact::find($id);
        $contacts->delete();
        return redirect()->to('/contacts');
    }
}
