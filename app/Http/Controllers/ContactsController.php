<?php

namespace App\Http\Controllers;

use App\Models\Contacts;
use App\Http\Requests\StoreContactsRequest;
use App\Http\Requests\UpdateContactsRequest;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('contacts.contacts', ['dbContent' => Contacts::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('contacts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreContactsRequest $request)
    {
        $contact = new Contacts($request->all());
        $contact->save();
        return redirect('contacts')->with('status', 'Contact saved!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $contacts = Contacts::where('id', $id)->first();
        return view('contacts.contact', ['item' => $contacts]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contacts $contacts)
    {
        //$contacts = Contacts::where('id', $id)->first();
        return view("contacts.edit", ["item" => $contacts]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateContactsRequest $request, Contacts $contacts)
    {
        //$contacts = Contacts::where('id', $id)->first();
        $contacts->update($request->all());
        return redirect('contacts')->with('status', 'Contact updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contacts $contacts)
    {
        //
    }
}
