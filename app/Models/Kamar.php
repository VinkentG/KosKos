<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kamar extends Model
{
    protected $table = '_kamar';
    protected $primarykey = 'ID_Kamar';
    protected $fillable = ['ID_Kamar','ID_Bangunan','TipeKamar','JumlahKamar','BiayaKamar'];

    use HasFactory;
}
