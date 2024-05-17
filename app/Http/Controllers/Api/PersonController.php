<?php

namespace App\Http\Controllers\Api;

use App\Models\Person;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $persons = Person::all();

        return response()->json($persons, 200);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $person = $request->validate([
            'name' => 'required',
            'age' => 'required',
            'gender' => 'required',
            'created_at' => 'required'
        ]);

        $result = Person::create($person);

        return response()->json([
            'id' => $result->id,
            'name' => $result->name,
            'age' => $result->age,
            'gender' => $result->gender,
            'created_at' => $result->created_at,
            'updated_at' => $result->updated_at
        ], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
