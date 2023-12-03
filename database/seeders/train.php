<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class train extends Seeder
{
    /**
     * Run the database seeds
     * menambahkan data kalau di run agar cepet nambahnya.
     */
    public function run(): void 
    {
        DB::table('trains') -> insert ([
            'jurusan' => "Bogor",
            'kode_kereta' => "SF10",
            'jam_berangkat' => "10.30",
            'jam_tiba' => "11.20"
        ]);

        DB::table('trains') -> insert ([
            'jurusan' => "Serpong",
            'kode_kereta' => "SF20",
            'jam_berangkat' => "11.30",
            'jam_tiba' => "12.00"
        ]);
    }
}
