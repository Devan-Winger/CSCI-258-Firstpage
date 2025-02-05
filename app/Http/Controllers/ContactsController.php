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
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contacts $contacts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateContactsRequest $request, Contacts $contacts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contacts $contacts)
    {
        //
    }
}
