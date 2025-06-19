<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            'admin' => 'Administrator with full system access',
            'student' => 'Student with course access and enrollment',
            'teacher' => 'Teacher with class management privileges',
        ];

        foreach ($roles as $name => $description) {
            \App\Models\Role::firstOrCreate(
                ['role_name' => $name],
                ['description' => $description]
            );
        }
    }
}
