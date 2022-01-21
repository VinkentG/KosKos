<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table = '_transaksi';
    protected $primarykey = 'ID_Transaksi';
    protected $fillable = ['ID_Transaksi','ID_Kamar','ID_Bangunan','ID_Pelanggan','ID_Pemilik','Nominal','Status','Tanggal'];

    // public function brand(){
    //     return $this->hasOne(' App\Models\Kelompok','brandid','brandid');
    // }

    // public function kelompok(){
    //     return $this->hasOne(' App\Models\Kelompok','kelompokid','kelompokid');
    // }
    use HasFactory;
}
