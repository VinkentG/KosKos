<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    protected $table = '_pelanggan';
    protected $primarykey = 'ID_Pelanggan';
    protected $fillable = ['ID_Kamar','ID_Pelanggan','NamaPelanggan','Notelp'];

    use HasFactory;
}
