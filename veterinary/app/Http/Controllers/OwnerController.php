<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\owner;

class OwnerController extends Controller
{
    public function index()
    {
        //$owners = Owner::orderby('laravel_clinic')->get();

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
        
        return view('books.edit', compact('book'));
    }
}
