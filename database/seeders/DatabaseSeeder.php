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
        \DB::table('users')->insert([
        //     // [
        //     // 'ID_Pemilik' => ("1"),
        //     // 'name' => ("B0001"),
        //     // 'alamat' => ("Kos Matahari"),
        //     // 'email' => ("b@gidd.com"),
        //     // 'password' => ("abcd"),
        //     // ],
            [
            'ID_Pemilik' => ("2"),
            'name' => ("B002"),
            'alamat' => ("Kos Matahari"),
            'email' => ("bw@gidd.com"),
            'password' => ("abcd"),
            ],
        ]);
        \DB::table('_bangunan')->insert([
            [
            'ID_Pemilik' => ("1"),
            'ID_Bangunan' => ("B0001"),
            'Nama' => ("Kos Matahari"),
            'ALamat' => ("Jl agung"),
            ],
               [
            'ID_Pemilik' => ("1"),
            'ID_Bangunan' => ("B0002"),
            'Nama' => ("Kos Bulan"),
            'ALamat' => ("Jl AhmadYani"),
            ],
               [
            'ID_Pemilik' => ("1"),
            'ID_Bangunan' => ("B0004"),
            'Nama' => ("Kos Matahari"),
            'ALamat' => ("Jl agung"),
            ],
             [
            'ID_Pemilik' => ("1"),
            'ID_Bangunan' => ("B0005"),
            'Nama' => ("Kos Matahari"),
            'ALamat' => ("Jl agung"),
            ],
               [
            'ID_Pemilik' => ("1"),
            'ID_Bangunan' => ("B0006"),
            'Nama' => ("Kos Bulan"),
            'ALamat' => ("Jl AhmadYani"),
            ],
        ]);
        \DB::table('_kamar')->insert([
            [
                'ID_Kamar' => ("K0001"),
                'TipeKamar' => ("VIP"),
                'JumlahKamar' => ("5"),
                'BiayaKamar' => ("2000000"),
                'ID_Bangunan' => ("B0001"),
            ],
            [
                'ID_Kamar' => ("K0002"),
                'TipeKamar' => ("Single"),
                'JumlahKamar' => ("10"),
                'BiayaKamar' => ("1500000"),
                'ID_Bangunan' => ("B0001"),
            ],
            [
                'ID_Kamar' => ("K0003"),
                'TipeKamar' => ("Double"),
                'JumlahKamar' => ("15"),
                'BiayaKamar' => ("1300000"),
                'ID_Bangunan' => ("B0001"),
            ],
        ]);
       \DB::table('_fasilitas')->insert([
            [
                'ID_Fasilitas' => ("F0001"),
                'ID_Bangunan' => ("B0001"),
                'Listrik' => ("500000"),
                'WIFI' => ("250000"),
                'Pemeliharaan' => ("100000"),
                'Pengeluaran' => ("850000"),
                'Tanggal' => ("2021-01-01"),
            ],
            [
                'ID_Fasilitas' => ("F0002"),
                'ID_Bangunan' => ("B0001"),
                'Listrik' => ("500000"),
                'WIFI' => ("250000"),
                'Pemeliharaan' => ("125000"),
                'Pengeluaran' => ("875000"),
                'Tanggal' => ("2021-02-01"),
            ],
            [
                'ID_Fasilitas' => ("F0003"),
                'ID_Bangunan' => ("B0001"),
                'Listrik' => ("500000"),
                'WIFI' => ("250000"),
                'Pemeliharaan' => ("100000"),
                'Pengeluaran' => ("750000"),
                'Tanggal' => ("2021-03-01"),
            ],
            [
                'ID_Fasilitas' => ("F0004"),
                'ID_Bangunan' => ("B0001"),
                'Listrik' => ("500000"),
                'WIFI' => ("250000"),
                'Pemeliharaan' => ("200000"),
                'Pengeluaran' => ("750000"),
                'Tanggal' => ("2021-04-01"),
            ],
            [
                'ID_Fasilitas' => ("F0005"),
                'ID_Bangunan' => ("B0001"),
                'Listrik' => ("500000"),
                'WIFI' => ("250000"),
                'Pemeliharaan' => ("0"),
                'Pengeluaran' => ("750000"),
                'Tanggal' => ("2021-05-01"),
            ],
            [
                'ID_Fasilitas' => ("F0006"),
                'ID_Bangunan' => ("B0001"),
                'Listrik' => ("500000"),
                'WIFI' => ("250000"),
                'Pemeliharaan' => ("150000"),
                'Pengeluaran' => ("750000"),
                'Tanggal' => ("2021-06-01"),
            ],
            [
                'ID_Fasilitas' => ("F0007"),
                'ID_Bangunan' => ("B0001"),
                'Listrik' => ("500000"),
                'WIFI' => ("250000"),
                'Pemeliharaan' => ("20000"),
                'Pengeluaran' => ("750000"),
                'Tanggal' => ("2021-07-01"),
            ],
            [
                'ID_Fasilitas' => ("F0008"),
                'ID_Bangunan' => ("B0001"),
                'Listrik' => ("500000"),
                'WIFI' => ("250000"),
                'Pemeliharaan' => ("200000"),
                'Pengeluaran' => ("750000"),
                'Tanggal' => ("2021-08-01"),
            ],
            [
                'ID_Fasilitas' => ("F0009"),
                'ID_Bangunan' => ("B0001"),
                'Listrik' => ("500000"),
                'WIFI' => ("250000"),
                'Pemeliharaan' => ("0"),
                'Pengeluaran' => ("750000"),
                'Tanggal' => ("2021-09-01"),
            ],
            [
                'ID_Fasilitas' => ("F0010"),
                'ID_Bangunan' => ("B0001"),
                'Listrik' => ("500000"),
                'WIFI' => ("250000"),
                'Pemeliharaan' => ("10000"),
                'Pengeluaran' => ("750000"),
                'Tanggal' => ("2021-10-01"),
            ],
            [
                'ID_Fasilitas' => ("F0011"),
                'ID_Bangunan' => ("B0001"),
                'Listrik' => ("500000"),
                'WIFI' => ("250000"),
                'Pemeliharaan' => ("400000"),
                'Pengeluaran' => ("750000"),
                'Tanggal' => ("2021-11-01"),
            ],
            [
                'ID_Fasilitas' => ("F0012"),
                'ID_Bangunan' => ("B0001"),
                'Listrik' => ("500000"),
                'WIFI' => ("250000"),
                'Pemeliharaan' => ("100000"),
                'Pengeluaran' => ("750000"),
                'Tanggal' => ("2021-12-01"),
            ],
            [
                'ID_Fasilitas' => ("F0013"),
                'ID_Bangunan' => ("B0002"),
                'Listrik' => ("500000"),
                'WIFI' => ("250000"),
                'Pemeliharaan' => ("50000"),
                'Pengeluaran' => ("750000"),
                'Tanggal' => ("2021-01-01"),
            ],
        ]);
        \DB::table('_pegawai')->insert([
            [
            'ID_Pegawai' => ("P0001"),
            'ID_Bangunan' => ("B0001"),
            'NamaPegawai' => ("Ahmad"),
            'Gaji' => ("1000000"),
            'Peran' => ("Satpam"),
            ],
            [
            'ID_Pegawai' => ("P0002"),
            'ID_Bangunan' => ("B0001"),
            'NamaPegawai' => ("Susi"),
            'Gaji' => ("2000000"),
            'Peran' => ("Satpam"),
            ],
            [
            'ID_Pegawai' => ("P0003"),
            'ID_Bangunan' => ("B0001"),
            'NamaPegawai' => ("Mirna"),
            'Gaji' => ("3000000"),
            'Peran' => ("Satpam"),
            ],
        ]);
        \DB::table('_pelanggan')->insert([
            [
            'ID_Pelanggan' => ("C0001"),
            'ID_Kamar' => ("K0001"),
            'Nama' => ("Alex"),
            'LamaSewa' => ("10"),
            'TanggalMasuk' => ("2020-01-01"),
            ],
             [
            'ID_Pelanggan' => ("C0002"),
            'ID_Kamar' => ("K0002"),
            'Nama' => ("Ben"),
            'LamaSewa' => ("1"),
            'TanggalMasuk' => ("2020-01-01"),
            ],
             [
            'ID_Pelanggan' => ("C0003"),
            'ID_Kamar' => ("K0003"),
            'Nama' => ("Vivi"),
            'LamaSewa' => ("3"),
            'TanggalMasuk' => ("2020-02-01"),
            ],
             [
            'ID_Pelanggan' => ("C0004"),
            'ID_Kamar' => ("K0001"),
            'Nama' => ("Sa"),
            'LamaSewa' => ("4"),
            'TanggalMasuk' => ("2020-02-01"),
             ],
            [
            'ID_Pelanggan' => ("C0005"),
            'ID_Kamar' => ("K0002"),
            'Nama' => ("Mimi"),
            'LamaSewa' => ("1"),
            'TanggalMasuk' => ("2020-02-01"),
            ],
        ]);
        \DB::table('_transaksi')->insert([
            [
            'ID_Transaksi' => ("T0001"),
            'ID_Bangunan' => ("B0001"),
            'ID_Pemilik' => ("1"),
            'ID_Kamar' => ("K0001"),
            'ID_Pelanggan' => ("C0001"),
            'Nominal' => ("300000"),
            'Status' => ("Lunas"),
            ],
                [
            'ID_Transaksi' => ("T0002"),
            'ID_Bangunan' => ("B0001"),
            'ID_Pemilik' => ("1"),
            'ID_Kamar' => ("K0001"),
            'ID_Pelanggan' => ("C0002"),
            'Nominal' => ("20000000"),
            'Status' => ("Lunas"),
            ],
        ]);
        \DB::table('_penghasilan')->insert([
            [
            'ID_Penghasilan' => ("T0001"),
            'ID_Bangunan' => ("B0001"),
            'Tanggal' => ("2021-01-01"),
            'LabaBersih' => ("4000000"),
            'LabaKotor' => ("1000000"),
            ],
            [
            'ID_Penghasilan' => ("T0002"),
            'ID_Bangunan' => ("B0001"),
            'Tanggal' => ("2021-02-01"),
            'LabaBersih' => ("2000000"),
            'LabaKotor' => ("3000000"),
            ],
              [
            'ID_Penghasilan' => ("T0003"),
            'ID_Bangunan' => ("B0001"),
            'Tanggal' => ("2021-03-01"),
            'LabaBersih' => ("1000000"),
            'LabaKotor' => ("2000000"),
            ],
            [
            'ID_Penghasilan' => ("T0004"),
            'ID_Bangunan' => ("B0001"),
            'Tanggal' => ("2021-04-01"),
            'LabaBersih' => ("4000000"),
            'LabaKotor' => ("5000000"),
            ],
              [
            'ID_Penghasilan' => ("T0005"),
            'ID_Bangunan' => ("B0001"),
            'Tanggal' => ("2021-05-01"),
            'LabaBersih' => ("1000000"),
            'LabaKotor' => ("2000000"),
            ],
            [
            'ID_Penghasilan' => ("T0006"),
            'ID_Bangunan' => ("B0001"),
            'Tanggal' => ("2021-06-01"),
            'LabaBersih' => ("8000000"),
            'LabaKotor' => ("7000000"),
            ],
                [
            'ID_Penghasilan' => ("T0007"),
            'ID_Bangunan' => ("B0001"),
            'Tanggal' => ("2021-07-01"),
            'LabaBersih' => ("8000000"),
            'LabaKotor' => ("7000000"),
            ],
            [
                'ID_Penghasilan' => ("T0008"),
                'ID_Bangunan' => ("B0001"),
                'Tanggal' => ("2021-08-01"),
                'LabaBersih' => ("4000000"),
                'LabaKotor' => ("1000000"),
                ],
                [
                'ID_Penghasilan' => ("T0009"),
                'ID_Bangunan' => ("B0001"),
                'Tanggal' => ("2021-9-01"),
                'LabaBersih' => ("2000000"),
                'LabaKotor' => ("3000000"),
                ],
                  [
                'ID_Penghasilan' => ("T0010"),
                'ID_Bangunan' => ("B0001"),
                'Tanggal' => ("2021-10-01"),
                'LabaBersih' => ("1000000"),
                'LabaKotor' => ("2000000"),
                ],
                [
                'ID_Penghasilan' => ("T0011"),
                'ID_Bangunan' => ("B0001"),
                'Tanggal' => ("2021-11-01"),
                'LabaBersih' => ("4000000"),
                'LabaKotor' => ("5000000"),
                ],
                  [
                'ID_Penghasilan' => ("T0012"),
                'ID_Bangunan' => ("B0002"),
                'Tanggal' => ("2021-12-01"),
                'LabaBersih' => ("1000000"),
                'LabaKotor' => ("2000000"),
                ],
                [
                'ID_Penghasilan' => ("T0013"),
                'ID_Bangunan' => ("B0002"),
                'Tanggal' => ("2020-06-01"),
                'LabaBersih' => ("8000000"),
                'LabaKotor' => ("7000000"),
                ],
                    [
                'ID_Penghasilan' => ("T0014"),
                'ID_Bangunan' => ("B0002"),
                'Tanggal' => ("2020-07-01"),
                'LabaBersih' => ("8000000"),
                'LabaKotor' => ("7000000"),
                ],
        ]);
    }
}
