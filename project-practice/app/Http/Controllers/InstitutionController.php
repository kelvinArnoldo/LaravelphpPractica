<?php

namespace App\Http\Controllers;

use App\Models\Institution;
use Illuminate\Http\Request;

class InstitutionController extends Controller
{
    public function index()
    {
        $instituciones = Institution::all();
        return view('Institution.index', compact('Institution'));
    }

    public function create()
    {
        return view('Institution.create');
    }

    public function store(Request $request)
    {
        $institucion = Institution::create($request->all());
        return redirect()->route('Institution.index');
    }

    public function show(Institution $institucion)
    {
        return view('Institution.show', compact('Institution'));
    }

    public function edit(Institucion $institucion)
    {
        return view('Institution.edit', compact('Institution'));
    }

    public function update(Request $request, Institution $institucion)
    {
        $institucion->update($request->all());
        return redirect()->route('Institution.index');
    }

    public function destroy(Institution $institucion)
    {
        $institucion->delete();
        return redirect()->route('Institution.index');
    }
}
