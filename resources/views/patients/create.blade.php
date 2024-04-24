<!-- resources/views/patients/create.blade.php -->
<h1>Add New Patient</h1>

<form action="{{ route('patients.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control" id="name" required>
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" class="form-control" id="email" required>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
