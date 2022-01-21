<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    protected $table = '_pegawai';
    protected $primarykey = 'ID_Pegawai';
    protected $fillable = ['ID_Pegawai','ID_Bangunan','NamaPegawai','Peran','Gaji'];

    // public function brand(){
    //     return $this->hasOne(' App\Models\Kelompok','brandid','brandid');
    // }

    // public function kelompok(){
    //     return $this->hasOne(' App\Models\Kelompok','kelompokid','kelompokid');
    // }
}
