<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class InstitutionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('institutions')->insert([
            [
                'name' => 'latiseducation',
            ],
            [
                'name' => 'tutorindonesia',
            ],
        ]);
    }
}
