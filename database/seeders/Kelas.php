<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Kelas extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kelas')->insert([
            ['kelas'=>'A','ID_Mahasiswa'=>1,'ID_Mata_Kuliah'=>1],
            ['kelas'=>'B','ID_Mahasiswa'=>2,'ID_Mata_Kuliah'=>2],
            ['kelas'=>'C','ID_Mahasiswa'=>3,'ID_Mata_Kuliah'=>3],
            ['kelas'=>'D','ID_Mahasiswa'=>4,'ID_Mata_Kuliah'=>4],
            ['kelas'=>'E','ID_Mahasiswa'=>5,'ID_Mata_Kuliah'=>5]
        ]);
    }
}
