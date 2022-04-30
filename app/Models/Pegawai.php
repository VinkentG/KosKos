<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    protected $table = '_pegawai';
    protected $primarykey = 'ID_Pegawai';
    protected $fillable = ['ID_Pegawai','ID_Bangunan','NamaPegawai','Alamat','Peran','Gaji'];

    use HasFactory;
}
