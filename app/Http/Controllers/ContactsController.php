<?php

namespace App\Http\Controllers;

use App\Models\Contacts;
use App\Http\Requests\StoreContactsRequest;
use App\Http\Requests\UpdateContactsRequest;

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
        //ex 4
        $item = [];
        $item["name"] = "";
        $item["completed"] = 0;
        $item["started"] = "";
        return view('contacts.create', ['item' => $item]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreContactsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Contacts $contacts)
    {
        return view('contacts.contact', ['item' => $contacts]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contacts $contacts)
    {
        return view("contacts.edit", ["item" => $contacts]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateContactsRequest $request, Contacts $contacts)
    {
        if($contacts["completed"] == 1 && !$request["completed"]){
            $request["completed"] = 0;
        }
        $contacts->update($request->all());
        return redirect('contacts')->with('status', 'Task updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contacts $contacts)
    {
        //
    }
}
