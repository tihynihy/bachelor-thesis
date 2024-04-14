<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function index()
    {
        $patients = Patient::all();
        return view('patients.index', ['patients' => $patients]);
    }

    public function create()
    {
        return view('patients.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:patients,email',
        ]);

        Patient::create($validatedData);
        return redirect()->route('patients.index')->with('success', 'Patient created successfully');
    }

    public function show($id)
    {
        $patient = Patient::findOrFail($id);
        return view('patients.show', ['patient' => $patient]);
    }

    public function edit($id)
    {
        $patient = Patient::findOrFail($id);
        return view('patients.edit', ['patient' => $patient]);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:patients,email,'.$id,
        ]);

        $patient = Patient::findOrFail($id);
        $patient->update($validatedData);
        return redirect()->route('patients.index')->with('success', 'Patient updated successfully');
    }

    public function destroy($id)
    {
        $patient = Patient::findOrFail($id);
        $patient->delete();
        return redirect()->route('patients.index')->with('success', 'Patient deleted successfully');
    }
}
