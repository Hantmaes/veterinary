<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Animal;
use App\Owner;
class AnimalController extends Controller
{   
    public function index()
    {
        $animals = Animal::orderBy('name', 'asc')->get();

        return view('animals.index', compact('animals'));
    }

    public function show($animal_id)
    {
        $animal = Animal::findOrFail($animal_id);

        // $owner = Book::where('publisher_id', $publisher_id)->get();

        return view('animals.show', compact('animal'));
        
    }

    public function create()
    {
        $publisher = new Publisher;

        return view('publishers.edit', compact('publisher'));

    }

    public function store(Request $request)
    {
        //validates the request
        $this->validate($request, [
            'title' => 'required',
        ]);

        //prepare empty object
        $publisher = new Publisher;

        //fill the object from request
        $publisher->title = $request->input('title');

        //save the object
        $publisher->save();

        //flash success message (provide it to the next request)
        session()->flash('success_message', 'The comment was successfully saved!');

        return redirect()->route('publishers.edit', [$publisher->id]);
    }

    public function edit($id)
    {
        $animal = Animal::findOrFail($id);

        return view('animals.edit', compact('animal'));
    }

    public function update(Request $request, $id)
    {
        //validates the request
        $this->validate($request, [
            'title' => 'required',
        ]);
        //get the object to be updated from database
        $publisher = Publisher::findOrFail($id);

        //fill the object from request
        $publisher->title = $request->input('title');

        //save the object
        $publisher->save();

        //flash success message (provide it to the next request)
        session()->flash('success_message', 'The comment was successfully saved!');

        return redirect()->route('publishers.edit', [$publisher->id]);
    }
}