<?php

use Illuminate\Support\Facades\Route;
use App\Models\Record;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\RecordController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('test-connection', function(){
    $records = Record::all();  //fetch all the records 

    return $records;
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/patients', [PatientController::class, 'index'])->name('patients.index');
Route::get('/patients/create', [PatientController::class, 'create'])->name('patients.create');
Route::post('/patients', [PatientController::class, 'store'])->name('patients.store');
Route::get('/patients/{patient}', [PatientController::class, 'show'])->name('patients.show');
Route::get('/patients/{patient}/edit', [PatientController::class, 'edit'])->name('patients.edit');
Route::put('/patients/{patient}', [PatientController::class, 'update'])->name('patients.update');
Route::delete('/patients/{patient}', [PatientController::class, 'destroy'])->name('patients.destroy');

Route::get('/records', [RecordController::class, 'index'])->name('records.index');
Route::get('/records/create', [RecordController::class, 'create'])->name('records.create');
Route::post('/records', [RecordController::class, 'store'])->name('records.store');
Route::get('/records/{record}', [RecordController::class, 'show'])->name('records.show');
Route::get('/records/{record}/edit', [RecordController::class, 'edit'])->name('records.edit');
Route::put('/records/{record}', [RecordController::class, 'update'])->name('records.update');
Route::delete('/records/{record}', [RecordController::class, 'destroy'])->name('records.destroy');
