<?php

namespace App\Http\Controllers;

use App\Models\People;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;

class PeopleController extends Controller
{
    public function index(): View
    {
        $people = DB::table('people')->paginate(10);
        return view('people.index', ['people' => $people]);
    }

    public function create(): View
    {
        return view('people.create');
    }



    public function store(Request $request)
    {
        if ($request->isJson()) {
            $request = (object)$request->json()->all();
        } else if ($request->input('jsonObj')) {
            $request = json_decode($request->input('jsonObj'));
        } else {
            $request = (object)$request->input();
        }

        $human = new People();
        $human->firstname = $request->firstname;
        $human->lastname = $request->lastname;
        $human->email = $request->email;
        $human->password = Hash::make($request->password);
        $human->save();
        return redirect('/people');
    }

    public function edit(People $people)
    {
        return view('people.edit', compact('people'));
    }

    public function update(Request $request, People $people)
    {
       $people->update($request->all());
        return redirect('/people');
    }

    public function destroy(People $people)
    {
        $people->delete();
        return redirect('/people');
    }
}
