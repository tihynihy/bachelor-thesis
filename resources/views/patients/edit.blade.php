<!-- resources/views/patients/edit.blade.php -->
<h1>Edit Patient</h1>

<form action="{{ route('patients.update', $patient->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control" id="name" value="{{ $patient->name }}" required>
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" class="form-control" id="email" value="{{ $patient->email }}" required>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>
