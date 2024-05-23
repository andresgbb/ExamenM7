<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;
class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $student1 = new Student;
        $student1->name = "Ruben";
        $student1->email = "ruben@gmail.com";
        $student1->birthDate = "2004-01-01";
        $student1->course_id=1;
        $student1->save();

        $student2 = new Student;
        $student2->name = "Marc";
        $student2->email = "marc@gmail.com";
        $student2->birthDate = "2003-01-01";
        $student2->course_id=1;
        $student2->save();

        $student3 = new Student;
        $student3->name = "Oscar";
        $student3->email = "oscar@gmail.com";
        $student3->birthDate = "2000-01-01";
        $student3->course_id=2;
        $student3->save();

        $student4 = new Student;
        $student4->name = "Lorena";
        $student4->email = "loren@gmail.com";
        $student4->birthDate = "2003-01-01";
        $student4->course_id=2;
        $student4->save();

        $student5 = new Student;
        $student5->name = "Toni";
        $student5->email = "toni@gmail.com";
        $student5->birthDate = "2002-01-01";
        $student5->course_id=4;
        $student5->save();

        $student6 = new Student;
        $student6->name = "Arnau";
        $student6->email = "arnau@gmail.com";
        $student6->birthDate = "2002-01-01";
        $student6->course_id=5;
        $student6->save();

        $student7 = new Student;
        $student7->name = "David";
        $student7->email = "david@gmail.com";
        $student7->birthDate = "2002-01-01";
        $student7->course_id=5;
        $student7->save();

        $student8 = new Student;
        $student8->name = "Jose";
        $student8->email = "jose@gmail.com";
        $student8->birthDate = "2002-01-01";
        $student8->course_id=1;
        $student8->save();

        $student9 = new Student;
        $student9->name = "Eric";
        $student9->email = "eric@gmail.com";
        $student9->birthDate = "2002-01-01";
        $student9->course_id=3;
        $student9->save();

    }
}
