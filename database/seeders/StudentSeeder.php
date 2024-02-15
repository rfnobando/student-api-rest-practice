<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Student::factory()->count(25)->hasGrades(20)->create();
        Student::factory()->count(50)->hasGrades(25)->create();
        Student::factory()->count(35)->hasGrades(30)->create();
        Student::factory()->count(5)->create();
    }
}
