<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penghasilan extends Model
{
    protected $table = '_penghasilan';
    protected $primarykey = 'ID_Penghasilan';
    protected $fillable = ['ID_Penghasilan','ID_Bangunan','LabaBersih','LabaKotor','Tanggal'];
    // protected $dates = [
    //     'Tanggal'
    // ];


    // public function setHolidayDateAttribute($dates)
    // {
    //     $this->attributes['Tanggal'] =
    //     Carbon::createFromFormat('d/m/Y', $dates);
    // }

    // public function brand(){
    //     return $this->hasOne(' App\Models\Kelompok','brandid','brandid');
    // }

    // public function kelompok(){
    //     return $this->hasOne(' App\Models\Kelompok','kelompokid','kelompokid');
    // }
    use HasFactory;
}
