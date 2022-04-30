<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penghasilan extends Model
{
    protected $table = '_penghasilan';
    protected $primarykey = 'ID_Penghasilan';
    protected $fillable = ['ID_Penghasilan','ID_Bangunan','LabaBersih','LabaKotor','Tanggal'];

    use HasFactory;
}
