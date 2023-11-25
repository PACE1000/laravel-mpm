<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class Mahasiswa extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mahasiswas')->insert([
            ['Nama'=>'Alif Rachmat Ilahi','NIM'=>15,'Konsentrasi'=>'TI','Semester'=>7],
            ['Nama'=>'Arya Bramaputra','NIM'=>33,'Konsentrasi'=>'TI','Semester'=>7],
            ['Nama'=>'Alexander Caisar Simamora','NIM'=>185,'Konsentrasi'=>'TI','Semester'=>7],
            ['Nama'=>'Dani Sefianto','NIM'=>24,'Konsentrasi'=>'TI','Semester'=>7],
            ['Nama'=>'Fadhil Prawira','NIM'=>57,'Konsentrasi'=>'TI','Semester'=>7],
            ['Nama'=>'Guntur Awaludin Saptadi','NIM'=>88,'Konsentrasi'=>'TI','Semester'=>7],
            ['Nama'=>'Muhammad Diandra Junies Fahriza','NIM'=>159,'Konsentrasi'=>'TI','Semester'=>7],
            ['Nama'=>'Nadhif Lazuardi Aulia Rahim','NIM'=>4,'Konsentrasi'=>'TI','Semester'=>7],
            ['Nama'=>'Yudhi Winantoro','NIM'=>9,'Konsentrasi'=>'TI','Semester'=>7],
        ]);
    }
}
