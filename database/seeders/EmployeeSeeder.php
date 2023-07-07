<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('employees')->insert([
            'nama' => 'Muhammad Ridwan',
            'jeniskelamin' => 'cowo',
            'notelpon' => '08138867398'
        ]);
    }
}
