<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kamar extends Model
{
    protected $table = '_kamar';
    protected $primarykey = 'ID_Kamar';
    protected $fillable = ['ID_Kamar','ID_Bangunan','TipeKamar','JumlahKamar','BiayaKamar'];

    // public function brand(){
    //     return $this->hasOne(' App\Models\Kelompok','brandid','brandid');
    // }

    // public function kelompok(){
    //     return $this->hasOne(' App\Models\Kelompok','kelompokid','kelompokid');
    // }
    use HasFactory;
}
