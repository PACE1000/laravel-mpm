<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['Nama','NIM','Konsentrasi','Semester'];
}

