<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CoursesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
          DB::table('courses')->insert([
            ['name' => 'Orthopedic & Trauma Medicine'],
            ['name' => 'Perioperative Theatre Technology'],
            ['name' => 'CNA'],
            ['name' => 'Computer Packages'],
        ]);
    }
}
