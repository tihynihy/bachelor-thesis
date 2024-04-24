<!-- resources/views/patients/show.blade.php -->
<h1>Patient Details</h1>

<div>
    <strong>Name:</strong> {{ $patient->name }}
</div>
<div>
    <strong>Email:</strong> {{ $patient->email }}
</div>
<div>
    <a href="{{ route('patients.edit', $patient->id) }}" class="btn btn-primary">Edit</a>
    <form action="{{ route('patients.destroy', $patient->id) }}" method="POST" style="display: inline-block;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this patient?')">Delete</button>
    </form>
</div>
