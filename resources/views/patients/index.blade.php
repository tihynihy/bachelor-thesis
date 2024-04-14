<!-- resources/views/patients/index.blade.php -->

@extends('layouts.app') 

@section('content')
    <div class="container mx-auto px-4 py-8">
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-2xl font-bold">Patients</h1>
            <a href="{{ route('patients.create') }}" class="btn btn-primary">Add New Patient</a>
        </div>
        <div class="overflow-x-auto">
            <table class="min-w-full border rounded-lg">
                <thead>
                    <tr>
                        <th class="px-4 py-2 bg-gray-200 text-gray-600">Name</th>
                        <th class="px-4 py-2 bg-gray-200 text-gray-600">Email</th>
                        <th class="px-4 py-2 bg-gray-200 text-gray-600">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($patients as $patient)
                        <tr>
                            <td class="px-4 py-2">{{ $patient->name }}</td>
                            <td class="px-4 py-2">{{ $patient->email }}</td>
                            <td class="px-4 py-2">
                                <a href="{{ route('patients.show', $patient->id) }}" class="btn btn-info btn-sm">View</a>
                                <a href="{{ route('patients.edit', $patient->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                <form action="{{ route('patients.destroy', $patient->id) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this patient?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
