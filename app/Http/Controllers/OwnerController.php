<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Owner;
use App\Pet;


class OwnerController extends Controller
{
    public function index()
    {
        $owners = Owner::orderBy('surname', 'asc')->get();
        return view('owners.index', compact('owners'));
    }

    public function show($id)
    {
        $owner = Owner::find($id);
        $pet = Pet::all();
        return view('owners.show', compact('owner', 'id', 'pet'));
    }
   
}
