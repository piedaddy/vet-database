<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Visit;
use App\Pet;
use App\Owner;


class VisitController extends Controller
{

    public function index()
    {
        //$visit = Visit::findOrFail($id);
        $visit = Visit::all();

        $pets = Pet::all(); 
        $owners = Owner::all(); 

        return view('visits.index', compact('visit', 'pets', 'owners'));
    }


    public function create(Request $request)
    {
        $visit = new Visit;
        $visit->date = $request->input('date');
 
        $pet_name=$request->input('owner_name');
        $pets = Pet::where('pet_name', 'like', $pet_name); 

        $owner_name=$request->input('owner_name');
        $owners = Owner::where('owner_name', 'like', $owner_name); 

        $visit->owner_name = $request->input('owner_name');
        $visit->pet_name = $request->input('pet_name');
        $visit->report = $request->input('report');

        return view('visits.create', compact('visit','pets', 'owners', 'id'));
        return redirect()->action('PetController@index');
    }

    public function update(Request $request)
    {

    }
}
