<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contact;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $contacts = contact::all();
        return view('index', ['contact'=> $contacts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        //$contact->create($request->all());


    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $contact = new contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->address = $request->address;
        $contact->save();

        //return view('create');
        return redirect(route('contacts.index'));
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
    public function update(Request $request, string $id, contact $contact)
    {
        $contact->update($request->all());
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request,string $id, contact $contact)
    {
        contact::destroy($id);
        return redirect(route('contacts.index'));

//        if ($contact->id == $request->id){
//            $contact->delete();
//            return redirect(route('contacts.index'));
//        }else{
//            abort(403, "Failed");
//        }
    }
}
