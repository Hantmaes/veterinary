<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Owner;
use App\Animal;

class OwnerController extends Controller
{
    public function index()
    {

        $owners = Owner::orderBy('first_name', 'asc')->get();


        return view('owners.index', compact('owners'));
    }

    public function search()
    {
        $owners = Owner::where('first_name', 'like', '%anna%')->get();

        return view('owners.search', compact('owners'));
        
        //$owners = Owner::orderby('laravel_clinic')->get();

        //$owners = Owner::orderBy('first_name', 'asc')->get();

        //return view('owners.index', compact('owners'));
    }

    public function show($owner_id)
    {
        $owner = Owner::findOrFail($owner_id);

        $animals = Animal::where('owner_id', $owner_id)->get();
        
        return view('owners.show', compact('owner', 'animals'));
    }

    public function edit($id)
    {
        $owner = Owner::findOrFail($id);

        return view('owners.edit', compact('owner'));
    }

    public function update(Request $request, $id)
    {
        //validates the request
        $this->validate($request, [
            'first_name' => 'required',
            'surname' => 'required',
        ]);
        $owner = Owner::findOrFail($id);

        $owner->first_name = $request->input('first_name');
        $owner->surname = $request->input('surname');
        $owner->address = $request->input('address');
        $owner->email = $request->input('email');
        $owner->number = $request->input('number');

        //save the object
        $owner->save();

        //flash success message (provide it to the next request)
        session()->flash('success_message', 'Everything is saved. You can chill!');

        return redirect()->route('owners.edit', [$owner->id]);
    }
}
