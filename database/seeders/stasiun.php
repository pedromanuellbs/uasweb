<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class stasiun extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('stasiuns')->insert([
            'train_id' => "1",
            'stasiun_awal' => "Bogor",
            'stasiun_tiba' => "Serpong",
        ]);

        DB::table('stasiuns')->insert([
            'train_id' => "2",
            'stasiun_awal' => "Serpong",
            'stasiun_tiba' => "Pondok Ranji",
        ]);
    }
}
