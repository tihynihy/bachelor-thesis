<?php
// tests/Feature/ExampleTest.php

use App\Models\TestModel;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    use RefreshDatabase;

    public function testTestModel()
    {
        $testModel = TestModel::create([
            'name' => 'Test Record',
        ]);

        $retrievedTestModel = TestModel::find($testModel->id);

        $this->assertNotNull($retrievedTestModel);

        if ($retrievedTestModel) {
            $this->assertTrue(true, 'TestModel retrieved successfully!');
        } else {
            $this->assertTrue(false, 'Failed to retrieve TestModel from the database.');
        }
    }
}
