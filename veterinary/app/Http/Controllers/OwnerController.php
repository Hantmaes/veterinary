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
        //$owners = Owner::orderby('laravel_clinic')->get();

        //$owners = Owner::orderBy('first_name', 'asc')->get();

        //return view('owners.index', compact('owners'));
    }
}
