<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pet;
use App\Owner;
use App\Visit;



class PetController extends Controller
{
    public function index()
    {
        $pets = Pet::orderBy('name', 'asc')->get();
        $owner = Owner::all();
        return view('pets.index', compact('pets', 'owner'));    
    }

    public function show($id)
    {
        $visit = Visit::all();
        $pet = Pet::findOrFail($id);
        return view('pets.show', compact('pet', 'id', 'visit'));
    }

    public function search(Request $request) 
    {
        $name = $request->input('search');
        $pets = Pet::where('name', 'like', $name)->get();
        return view('/pets/index', compact('pets'));
    }

    public function edit($id)
    {
        $pet = Pet::all();
        return view('pets.edit', compact('pet','id'));

    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'breed' => 'required',
            'age' => 'required',
            'owner_id' => 'required',

        ]);

        $pet = Pet::findOrFail($id);
        $pet->name = $request->input('name');        
        $pet->breed = $request->input('breed');
        $pet->age = $request->input('age');
        $pet->weight = $request->input('weight');
        $pet->photo = $request->input('photo');
        $pet->owner_id = $request->input('owner_id');

        $pet->save();
        session()->flash('success_message', 'Success!');

        // return redirect()->action('PetController@edit', ['id'=>$id]);
        return redirect()->action('PetController@index');

    }

    public function delete($id)
    {
        $pet = Pet::findOrFail($id);
        $pet->delete();
        session()->flash('success_message', 'Deletion was success!');
        return redirect()->action('PetController@index'); 

 

    }

}

