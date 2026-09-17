<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('students')->insert([
            [
                'institution_id' => 1,
                'nis' => '20260001',
                'name' => 'Ahmad Fauzan',
                'email' => 'ahmad.fauzan@example.com',
                'foto' => null,
            ],
            [
                'institution_id' => 1,
                'nis' => '20260002',
                'name' => 'Siti Aisyah',
                'email' => 'siti.aisyah@example.com',
                'foto' => null,
            ],
            [
                'institution_id' => 2,
                'nis' => '20260003',
                'name' => 'Budi Santoso',
                'email' => 'budi.santoso@example.com',
                'foto' => null,
            ],
        ]);
    }
}
