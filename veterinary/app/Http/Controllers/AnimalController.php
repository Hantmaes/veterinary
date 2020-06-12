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
        $animal = new Animal;

        return view('animals.edit', compact('animal'));

    }

    public function store(Request $request)
    {
        //validates the request
        $this->validate($request, [
            'name' => 'required',
            'breed' => 'required',
            'age' => 'required',
            'weight' => 'required',
        ]);

        //prepare empty object
        $animal = new Animal;
        
        $owner =Owner::where(`first_name`." ".`surname`, $request->input('owner'));
        //fill the object from request
        $animal->name = $request->input('name');
        $animal->owner_id = $owner;
        $animal->breed = $request->input('breed');
        $animal->age = $request->input('age');
        $animal->weight = $request->input('weight');
        $animal->specie_id = 1;
        //save the object
        $animal->save();

        //flash success message (provide it to the next request)
        session()->flash('success_message', 'The comment was successfully saved!');

        return redirect()->route('animals.edit', [$animal->id]);
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
            'name' => 'required',
            'breed' => 'required',
            'age' => 'required',
            'weight' => 'required',
        ]);
        $animal = Animal::findOrFail($id);

        $animal->name = $request->input('name');
        $animal->breed = $request->input('breed');
        $animal->age = $request->input('age');
        $animal->weight = $request->input('weight');
        $animal->specie_id = 1;

        //save the object
        $animal->save();

        //flash success message (provide it to the next request)
        session()->flash('success_message', 'The comment was successfully saved!');

        return redirect()->route('animals.edit', [$animal->id]);
    }
}