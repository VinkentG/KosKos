<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('_main_data')->insert([
            [
                'Tahun' => ("2018"),
                'TipeKamar' => ("VIP"),
                'JumlahKamar' => ("5"),
                'Biaya' => ("2000000"),
                'LamaSewa' => ("10"),
            ],
            [
                'Tahun' => ("2018"),
                'TipeKamar' => ("Single"),
                'JumlahKamar' => ("10"),
                'Biaya' => ("1500000"),
                'LamaSewa' => ("50"),
            ],
            [
                'Tahun' => ("2018"),
                'TipeKamar' => ("Double"),
                'JumlahKamar' => ("15"),
                'Biaya' => ("1300000"),
                'LamaSewa' => ("100"),
            ],
        ]);
       \DB::table('_pengeluaran')->insert([
            [
                'Tahun' => ("2018"),
                'Bulan' => ("Januari"),
                'Listrik' => ("500000"),
                'Wifi' => ("250000"),
                'Pemeliharaan' => ("100000"),
                'GajiKaryawan' => ("6000000"),
            ],
            [
                'Tahun' => ("2018"),
                'Bulan' => ("Febuari"),
                'Listrik' => ("500000"),
                'Wifi' => ("250000"),
                'Pemeliharaan' => ("125000"),
                'GajiKaryawan' => ("6000000"),
            ],
            [
                'Tahun' => ("2018"),
                'Bulan' => ("Maret"),
                'Listrik' => ("500000"),
                'Wifi' => ("250000"),
                'Pemeliharaan' => ("99"),
                'GajiKaryawan' => ("6000000"),
            ],
            [
                'Tahun' => ("2018"),
                'Bulan' => ("April"),
                'Listrik' => ("500000"),
                'Wifi' => ("250000"),
                'Pemeliharaan' => ("0"),
                'GajiKaryawan' => ("6000000"),
            ],
            [
                'Tahun' => ("2018"),
                'Bulan' => ("Mei"),
                'Listrik' => ("500000"),
                'Wifi' => ("250000"),
                'Pemeliharaan' => ("0"),
                'GajiKaryawan' => ("6000000"),
            ],
            [
                'Tahun' => ("2018"),
                'Bulan' => ("Juni"),
                'Listrik' => ("500000"),
                'Wifi' => ("250000"),
                'Pemeliharaan' => ("88000000"),
                'GajiKaryawan' => ("6000000"),
            ],
            [
                'Tahun' => ("2018"),
                'Bulan' => ("Juli"),
                'Listrik' => ("500000"),
                'Wifi' => ("250000"),
                'Pemeliharaan' => ("200000"),
                'GajiKaryawan' => ("6000000"),
            ],
            [
                'Tahun' => ("2018"),
                'Bulan' => ("Agustus"),
                'Listrik' => ("500000"),
                'Wifi' => ("250000"),
                'Pemeliharaan' => ("225000"),
                'GajiKaryawan' => ("6000000"),
            ],
            [
                'Tahun' => ("2018"),
                'Bulan' => ("September"),
                'Listrik' => ("500000"),
                'Wifi' => ("250000"),
                'Pemeliharaan' => ("0"),
                'GajiKaryawan' => ("6000000"),
            ],
            [
                'Tahun' => ("2018"),
                'Bulan' => ("Oktober"),
                'Listrik' => ("500000"),
                'Wifi' => ("250000"),
                'Pemeliharaan' => ("12000"),
                'GajiKaryawan' => ("6000000"),
            ],
            [
                'Tahun' => ("2018"),
                'Bulan' => ("November"),
                'Listrik' => ("500000"),
                'Wifi' => ("250000"),
                'Pemeliharaan' => ("50000"),
                'GajiKaryawan' => ("6000000"),
            ],
            [
                'Tahun' => ("2018"),
                'Bulan' => ("Desember"),
                'Listrik' => ("500000"),
                'Wifi' => ("250000"),
                'Pemeliharaan' => ("100000"),
                'GajiKaryawan' => ("6000000"),
            ],
        ]);
    }
}
