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
        //$contacts = contact::all()->sortBy("name");
        
        return view('index', ['contact'=> $contacts]);
    }

    public function orderByName(Request $request){
        $contacts = contact::orderBy('name', 'asc')->get();
        return view('index', ['contact'=> $contacts]);
    } 


    public function orderByDate(Request $request){
        $contacts = $contacts = contact::orderBy('created_at', 'desc')->get();
        return view('index', ['contact'=> $contacts]);
    } 

    public function search(Request $request){
        $contacts = $contacts = contact::where('name', 'like', '%' . $request->search . '%')->get();
        return view('index', ['contact'=> $contacts]);
    } 

    
    public function viewSingleContact(Request $request)
    {
        $contact = contact::find($request->id);
        return view('edit', ['contact' => $contact]);


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
    public function update(Request $request, string $id)
    {
        contact::where('id', $id)->update([
            'name' => $request->name, 
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address
        ]);

        
        return redirect(route('contacts.index'));
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