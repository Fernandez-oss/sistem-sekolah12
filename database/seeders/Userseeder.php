<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Userseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userTeacherEmail = 'richard@ski.sch.id';
        $userStudentEmail = 'fer@ski.sch.id';

        User::updateOrCreate(
            ['email' => $userTeacherEmail],
            [
                'name' => 'Richard',
                'password' => bcrypt('password'),
                'role' => 'teacher',
            ]
        );

        User::updateOrCreate(
            ['email' => $userStudentEmail],
            [
                'name' => 'Fer',
                'password' => bcrypt('password'),
                'role' => 'student',
            ]
        );
    }
}
