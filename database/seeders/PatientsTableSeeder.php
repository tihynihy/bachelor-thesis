<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Patient;

class PatientsTableSeeder extends Seeder
{
    public function run()
    {
        // Create 10 sample patients
        Patient::create([
            'name' => 'John Doe',
            'email' => 'john@example.com',
            // Add more fields as needed
        ]);

        Patient::create([
            'name' => 'Jane Smith',
            'email' => 'jane@example.com',
            // Add more fields as needed
        ]);

        // Add more patients as needed
        // Patient::create([...]);
        // Patient::create([...]);
        // Patient::create([...]);
        // Patient::create([...]);
        // Patient::create([...]);
        // Patient::create([...]);
        // Patient::create([...]);
        // Patient::create([...]);
        // Patient::create([...]);
    }
}


