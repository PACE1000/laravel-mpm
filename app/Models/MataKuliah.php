<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MataKuliah extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['Nama_Mata_Kuliah','Nama_Pengampu','Kode_Mata_Kuliah','Semester'];
}
