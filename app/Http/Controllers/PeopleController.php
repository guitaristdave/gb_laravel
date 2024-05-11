<?php

namespace App\Http\Controllers;

use App\Models\People;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PeopleController extends Controller
{
    public function index()
    {
        $people = People::all();
        return view('people.index', compact('people'));
    }

    public function create()
    {
        return view('people.create');
    }

    public function store(Request $request)
    {
        $human = new People();
        $human->firstname = $request->get('name');
        $human->lastname = $request->get('lastname');
        $human->email = request('email');
        $human->password = Hash::make($request->get('password'));
        $human->save();
        return redirect('/people');
    }
}
