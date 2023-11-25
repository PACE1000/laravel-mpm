<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MataKuliah extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mata_kuliahs')->insert([
            ['Nama_Mata_Kuliah'=>'Etika Profesi','Nama_Pengampu'=> 'Pak Yuli','Kode_Mata_Kuliah'=>1,'Semester'=> 7],
            ['Nama_Mata_Kuliah'=>'Proposal Tugas Akhir','Nama_Pengampu'=> 'Pak Munawar','Kode_Mata_Kuliah'=>2,'Semester'=> 7],
            ['Nama_Mata_Kuliah'=>'Analisis Dan Desain Sistem Informasi','Nama_Pengampu'=> 'Pak Maman','Kode_Mata_Kuliah'=>3,'Semester'=> 7],
            ['Nama_Mata_Kuliah'=>'Keamanan Jaringan','Nama_Pengampu'=> 'Pak Arfan','Kode_Mata_Kuliah'=>4,'Semester'=> 7],
            ['Nama_Mata_Kuliah'=>'Metode Pemrograman Modern','Nama_Pengampu'=> 'Pak Arfan','Kode_Mata_Kuliah'=>5,'Semester'=> 7],
        ]);
    }
}
