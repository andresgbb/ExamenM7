<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Course;
use Illuminate\Support\Facades\Hash;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $course = new Course;
        $course->name = "Curso de PHP";
        $course->price = 10;
        $course->save();

        $course1 = new Course;
        $course1->name = "Curso de JS";
        $course1->price = 10;
        $course1->save();

        $course2 = new Course;
        $course2->name = "Curso de JAVA";
        $course2->price = 10;
        $course2->save();

        $course3 = new Course;
        $course3->name = "Curso de LARAVEL";
        $course3->price = 10;
        $course3->save();

        $course4 = new Course;
        $course4->name = "Curso de PYTHON";
        $course4->price = 10;
        $course4->save();


    }
}
