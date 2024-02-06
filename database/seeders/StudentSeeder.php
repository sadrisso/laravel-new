<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;
use Faker\Factory as Faker;

class StudentSeeder extends Seeder
{
    public function run(): void
    {
        for($i = 1; $i<=100; $i++)
        {
            $faker = Faker::create();
            $student = new Student;
            $student->name = $faker->name;
            $student->email = $faker->email;
            $student->password = $faker->password;
            $student->save();
        } 
    }
}
