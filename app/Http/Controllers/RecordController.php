<?php

namespace App\Http\Controllers;

use App\Models\Record;
use Illuminate\Http\Request;

class RecordController extends Controller
{
    public function index()
    {
        $records = Record::all();
        return view('records.index', ['records' => $records]);
    }

    public function create()
    {
        return view('records.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'description' => 'required|string',
        ]);

        Record::create($validatedData);
        return redirect()->route('records.index')->with('success', 'Record created successfully');
    }

    public function show($id)
    {
        $record = Record::findOrFail($id);
        return view('records.show', ['record' => $record]);
    }

    public function edit($id)
    {
        $record = Record::findOrFail($id);
        return view('records.edit', ['record' => $record]);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'description' => 'required|string',
        ]);

        $record = Record::findOrFail($id);
        $record->update($validatedData);
        return redirect()->route('records.index')->with('success', 'Record updated successfully');
    }

    public function destroy($id)
    {
        $record = Record::findOrFail($id);
        $record->delete();
        return redirect()->route('records.index')->with('success', 'Record deleted successfully');
    }
}
