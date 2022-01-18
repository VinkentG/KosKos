<?php

namespace App\Http\Controllers;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Http\Request;
use App\Models\Penghasilan;
use App\Models\Fasilitas;
use DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB as FacadesDB;
use Redirect;
use Illuminate\Support\Facades\Blade;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function index1()
    {
        return view('example');
    }

    public function Vis($id)
    {
        $Bangunan = DB::table('_bangunan')->where('_bangunan.ID_Pemilik', $id)->get();
        $penghasilan = DB::table('_penghasilan')->join('_bangunan', '_penghasilan.ID_Bangunan', '=', '_bangunan.ID_Bangunan')->where('_bangunan.ID_Pemilik', $id)->get();
        $penghasilan2 = DB::table('_penghasilan')->join('_bangunan', '_penghasilan.ID_Bangunan', '=', '_bangunan.ID_Bangunan')->whereYear('Tanggal', '=', '2021')->where('_bangunan.ID_Pemilik', $id)->get();

        $datenow = Carbon::now();
        $Month = $datenow->format('F');
        $Year = $datenow->format('Y');
        $Laba = [];
        $Bulan = [];
        $Tahun = [];

        foreach ($penghasilan2 as $lb) {
            $Laba[] = $lb->LabaBersih;
             // $Bulan[] = substr($lb->Tanggal,0,strpos($lb->Tanggal," "));
            // $Tahun[] = substr($lb->Tanggal,strpos($lb->Tanggal," "),5);
            $Bulan[] = Carbon::createFromFormat('Y-m-d', $lb->Tanggal)->format('F');
            $Tahun[] = Carbon::createFromFormat('Y-m-d', $lb->Tanggal)->format('Y');
        }
        // dd("$Bangunan");
        return view('visual')->with('Laba', $Laba)->with('Bulan', $Bulan)->with('Tahun', $Tahun)->with('bangunan', $Bangunan);
    }

    public function LabaBersih($id)
    {
        $penghasilan = DB::table('_penghasilan')->join('_bangunan', '_penghasilan.ID_Bangunan', '=', '_bangunan.ID_Bangunan')->where('_bangunan.ID_Pemilik', $id)->get();
        // $penghasilan2 = substr($penghasilan,strpos($penghasilan," "),5);
        // $penghasilan1 = DB::table('_penghasilan')->where($penghasilan2,'=','2021')->get();
        $Laba = [];
        $Bulan = [];
        $Tahun = [];

        foreach ($penghasilan as $lb) {
            $Laba[] = $lb->LabaBersih;
            $Bulan[] = substr($lb->Tanggal,0,strpos($lb->Tanggal," "));
            $Tahun[] = substr($lb->Tanggal,strpos($lb->Tanggal," "),5);
        }

        return view('example')->with('Laba', $Laba)->with('Bulan', $Bulan)->with('Tahun', $Tahun);
    }

    public function Visa()
    {
        $penghasilan = DB::table('_penghasilan')->join('_bangunan', '_penghasilan.ID_Bangunan', '=', '_bangunan.ID_Bangunan')->whereYear('Tanggal', '=', '2021')->get();
        $fasilitas = DB::table('_fasilitas')->join('_bangunan', '_fasilitas.ID_Bangunan', '=', '_bangunan.ID_Bangunan')->whereYear('Tanggal', '=', '2021')->get();
        $pegawai = DB::table('_pegawai')->join('_bangunan', '_pegawai.ID_Bangunan', '=', '_bangunan.ID_Bangunan')->where('_pegawai.ID_Bangunan', '=', 'B0001')->get();
        $kamar = DB::table('_kamar')->join('_bangunan', '_kamar.ID_Bangunan', '=', '_bangunan.ID_Bangunan')->where('_kamar.ID_Bangunan', '=', 'B0001')->get();
        $transaksi = DB::table('_transaksi')->join('_bangunan', '_transaksi.ID_Bangunan', '=', '_bangunan.ID_Bangunan')->join('_pelanggan', '_transaksi.ID_Pelanggan', '=', '_pelanggan.ID_Pelanggan')
        ->where('_transaksi.ID_Bangunan', '=', 'B0001')->get();

        $datenow = Carbon::now();
        $Month = $datenow->format('F');
        $Year = $datenow->format('Y');
        //Laba
        $Laba = [];
        $TotalLaba = 0;
        $Bulan = [];
        $Tahun = [];
        //Fasilitas
        $WIFI = [];
        $Listrik = [];
        $Pemeliharaan = [];
        $Pengeluaran = 0;
        //Pegawai
        $Gaji = 0;
        //Kamar
        $TipeKamar = 0;
        $JumlahKamar = 0;
        $BiayaKamar = 0;

        foreach ($fasilitas as $lb) {
            $WIFI[] = $lb->WIFI;
            $Listrik[] = $lb->Listrik;
            $Pengeluaran += $lb->Pengeluaran;
            $Pemeliharaan[] = $lb->Pemeliharaan;
        }

        foreach ($penghasilan as $lb) {
            $Laba[] = $lb->LabaBersih;
            $TotalLaba += $lb->LabaBersih;
             // $Bulan[] = substr($lb->Tanggal,0,strpos($lb->Tanggal," "));
            // $Tahun[] = substr($lb->Tanggal,strpos($lb->Tanggal," "),5);
            $Bulan[] = Carbon::createFromFormat('Y-m-d', $lb->Tanggal)->format('F');
            $Tahun[] = Carbon::createFromFormat('Y-m-d', $lb->Tanggal)->format('Y');
        }

        foreach ($pegawai as $lb) {
            $Gaji += $lb->Gaji;
        }

        $total = number_format($Pengeluaran,2,',','.');
        $totallababersih = number_format($TotalLaba,2,',','.');
        $totalGaji = number_format($Gaji,2,',','.');

        dd("$transaksi");

        return view('example')->with('Laba', $Laba)->with('Bulan', $Bulan)->with('Tahun', $Tahun)->with('WIFI', $WIFI)->with('Listrik', $Listrik)->with('Pengeluaran', $Pengeluaran)->with('Pemeliharaan', $Pemeliharaan)->with('Pengeluaran', $total)
        ->with('TotalLaba', $totallababersih)->with('totalGaji', $totalGaji)->with('pegawai', $pegawai);
    }

    public function Via()
    {
        $penghasilan = DB::table('_penghasilan')->join('_bangunan', '_penghasilan.ID_Bangunan', '=', '_bangunan.ID_Bangunan')->where('_bangunan.ID_Pemilik', 'users.ID_Pemilik')->get();
        // $penghasilan2 = DB::table('_penghasilan')->join('_bangunan', '_penghasilan.ID_Bangunan', '=', '_bangunan.ID_Bangunan')->whereYear('Tanggal', '=', '2021')->get();

        $datenow = Carbon::now();
        $Month = $datenow->format('F');
        $Year = $datenow->format('Y');
        $Laba = [];
        $Bulan = [];
        $Tahun = [];

        foreach ($penghasilan as $lb) {
            $Laba[] = $lb->LabaBersih;
             // $Bulan[] = substr($lb->Tanggal,0,strpos($lb->Tanggal," "));
            // $Tahun[] = substr($lb->Tanggal,strpos($lb->Tanggal," "),5);
            $Bulan[] = Carbon::createFromFormat('Y-m-d', $lb->Tanggal)->format('F');
            $Tahun[] = Carbon::createFromFormat('Y-m-d', $lb->Tanggal)->format('Y');
        }
        return view('visual')->with('Laba', $Laba)->with('Bulan', $Bulan)->with('Tahun', $Tahun)->with('penghasilan', $penghasilan);
    }
}
