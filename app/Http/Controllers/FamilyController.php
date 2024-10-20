<?php

namespace App\Http\Controllers;

use App\Http\Requests\FamilyRequest;
use App\Models\Family;
use Illuminate\Http\Request;

class FamilyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //OBTENER TODAS LAS FAMILIAS
        $families = Family::all();

        return view('families.index', compact('families'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('families.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FamilyRequest $request)
    {
        Family::create($request->validated());

        return to_route('families.index')->with('success', 'Family created successfully.');
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
