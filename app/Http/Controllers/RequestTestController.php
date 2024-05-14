<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestTestController extends Controller
{
    public function index()
    {
        return view('test');
    }

    public function store(Request $request)
    {
        $res = $request->collect();

        echo $res->each(fn($item) => $item . PHP_EOL);
    }
}
