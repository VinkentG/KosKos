<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fasilitas extends Model
{
    protected $table = '_fasilitas';
    protected $primarykey = 'ID_Fasilitas';
    protected $fillable = ['ID_Fasilitas','ID_Bangunan','WIFI','Listrik','Pemeliharaan','Tanggal','Pengeluaran'];


    use HasFactory;
}
