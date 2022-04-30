<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bangunan extends Model
{
    protected $table = '_bangunan';
    protected $primarykey = 'ID_Bangunan';
    protected $fillable = ['ID_Bangunan','ID_Pemilik','Nama','Alamat'];

    use HasFactory;
}
