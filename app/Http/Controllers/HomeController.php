<?php

namespace App\Http\Controllers;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Penghasilan;
use App\Models\Fasilitas;
use App\Models\Bangunan;
use App\Models\Pegawai;
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

    public function Vis($id)
    {
        $Bangunan = DB::table('_bangunan')->where('_bangunan.ID_Pemilik', $id)->get();

        $datenow = Carbon::now();
        $Month = $datenow->format('F');
        $Year = $datenow->format('Y');


        return view('visual')->with('bangunan', $Bangunan)->with('tahunini', $Year);
    }

    // public function Examp($id, $idb)
    // {
    //     $penghasilan = DB::table('_penghasilan')->join('_bangunan', '_penghasilan.ID_Bangunan', '=', '_bangunan.ID_Bangunan')->where('_bangunan.ID_Pemilik', $id)->get();
    //     // $penghasilan2 = substr($penghasilan,strpos($penghasilan," "),5);
    //     // $penghasilan1 = DB::table('_penghasilan')->where($penghasilan2,'=','2021')->get();
    //     $Laba = [];
    //     $Bulan = [];
    //     $Tahun = [];

    //     foreach ($penghasilan as $lb) {
    //         $Laba[] = $lb->LabaBersih;
    //         $Bulan[] = substr($lb->Tanggal,0,strpos($lb->Tanggal," "));
    //         $Tahun[] = substr($lb->Tanggal,strpos($lb->Tanggal," "),5);
    //     }

    //     return view('example')->with('Laba', $Laba)->with('Bulan', $Bulan)->with('Tahun', $Tahun);
    // }

    public function Examp($id, $idb, $ids)
    {
        $penghasilan = DB::table('_penghasilan')->join('_bangunan', '_penghasilan.ID_Bangunan', '=', '_bangunan.ID_Bangunan')
        ->whereYear('Tanggal', '=', $ids)
        ->where('_bangunan.ID_Pemilik', $id)
        ->where('_bangunan.ID_Bangunan', $idb)->get();
        $penghasilan1 = DB::table('_penghasilan')->join('_bangunan', '_penghasilan.ID_Bangunan', '=', '_bangunan.ID_Bangunan')
        ->where('_bangunan.ID_Pemilik', $id)
        ->where('_bangunan.ID_Bangunan', $idb)->get();

        $fasilitas = DB::table('_fasilitas')->join('_bangunan', '_fasilitas.ID_Bangunan', '=', '_bangunan.ID_Bangunan')
        ->whereYear('Tanggal', '=', $ids)
        ->where('_bangunan.ID_Pemilik', $id)
        ->where('_bangunan.ID_Bangunan', $idb)->get();

        $pegawai = DB::table('_pegawai')->join('_bangunan', '_pegawai.ID_Bangunan', '=', '_bangunan.ID_Bangunan')
        ->where('_bangunan.ID_Pemilik', $id)
        ->where('_bangunan.ID_Bangunan', $idb)->get();

        $pelanggan = DB::table('_pelanggan')->join('_kamar', '_kamar.ID_Kamar', '=', '_pelanggan.ID_Kamar')->join('_bangunan', '_kamar.ID_Bangunan', '=', '_bangunan.ID_Bangunan')
        // ->join('_transaksi','_transaksi.ID_Pelanggan','=','_pelanggan.ID_Pelanggan')
        ->where('_bangunan.ID_Pemilik', $id)
        ->where('_bangunan.ID_Bangunan', $idb)->get();
        // ->whereYear('_transaksi.Tanggal', $ids)->get();

        $kamar = DB::table('_kamar')->join('_bangunan', '_kamar.ID_Bangunan', '=', '_bangunan.ID_Bangunan')
        ->where('_bangunan.ID_Pemilik', $id)
        ->where('_bangunan.ID_Bangunan', $idb)->get();

        $transaksi = DB::table('_transaksi')->join('_bangunan', '_transaksi.ID_Bangunan', '=', '_bangunan.ID_Bangunan')
        // ->join('_pelanggan', '_transaksi.ID_Pelanggan', '=', '_pelanggan.ID_Pelanggan')
        ->where('_bangunan.ID_Pemilik', $id)
        ->where('_bangunan.ID_Bangunan', $idb)->get();
        // ->whereYear('Tanggal', $idb)->get();

        $Bangunan = DB::table('_bangunan')->where('_bangunan.ID_Pemilik', $id)->get();


        $datenow = Carbon::now();
        $Month = $datenow->format('F');
        $Year = $datenow->format('Y');
        //Laba
        $Laba = [];
        $TotalLaba = 0;
        $Bulan = [];
        $Tahun = [];
        $Tahun1= [];
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
        $a = [];
        foreach($kamar as $c){
        $a[] = $c->ID_Kamar;
        }
        //pelanggan
        $filter = [];
        foreach($pelanggan as $bb){
            $filter[] = $bb->TipeKamar;
        }
        $vals = array_count_values($filter);
        $array_values = array_values($vals);
        $array_keys = array_keys($vals);

        //transaksi
        $transaksiperbulan = [];
        foreach($transaksi as $tr){
            $transaksiperbulan[] = Carbon::createFromFormat('Y-m-d', $tr->Tanggal)->format('F');
        }
        $tram = array_count_values($transaksiperbulan);
        $countbulan = array_values($tram);
        $bulanTransaksi = array_keys($tram);
        $r=$transaksi->count();
        $tahunini = $ids;


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
        foreach ($penghasilan1 as $lb) {
            $Tahun1[] = Carbon::createFromFormat('Y-m-d', $lb->Tanggal)->format('Y');
        }

        foreach ($pegawai as $lb) {
            $Gaji += $lb->Gaji;
        }

        $total = number_format($Pengeluaran,2,',','.');
        $totallababersih = number_format($TotalLaba,2,',','.');
        $totalGaji = number_format($Gaji,2,',','.');
        $coba = array_count_values($Tahun1);
        $av = $idb;
        $ta = $ids;
        $ak = array_keys($coba);

        // dd($array_keys);

        return view('example')->with('Laba', $Laba)->with('Bulan', $Bulan)->with('Tahun', $Tahun)->with('WIFI', $WIFI)->with('Listrik', $Listrik)->with('Pengeluaran', $Pengeluaran)->with('Pemeliharaan', $Pemeliharaan)->with('Pengeluaran', $total)
        ->with('TotalLaba', $totallababersih)->with('totalGaji', $totalGaji)->with('pegawai', $pegawai)
        ->with('value', $array_values)->with('key', $array_keys)->with('year', $Year)->with('bulanTransaksi', $bulanTransaksi)->with('countbulan', $countbulan)
        ->with('r', $r)->with('tahunini', $tahunini)->with('Tahundrop', $ak)->with('av', $av)->with('Tahundrop', $ak)->with('Bangunan', $Bangunan)->with('ta', $ta);
    }

    // public function Via()
    // {
    //     $penghasilan = DB::table('_penghasilan')->join('_bangunan', '_penghasilan.ID_Bangunan', '=', '_bangunan.ID_Bangunan')->where('_bangunan.ID_Pemilik', 'users.ID_Pemilik')->get();
    //     // $penghasilan2 = DB::table('_penghasilan')->join('_bangunan', '_penghasilan.ID_Bangunan', '=', '_bangunan.ID_Bangunan')->whereYear('Tanggal', '=', '2021')->get();

    //     $datenow = Carbon::now();
    //     $Month = $datenow->format('F');
    //     $Year = $datenow->format('Y');
    //     $Laba = [];
    //     $Bulan = [];
    //     $Tahun = [];

    //     foreach ($penghasilan as $lb) {
    //         $Laba[] = $lb->LabaBersih;
    //          // $Bulan[] = substr($lb->Tanggal,0,strpos($lb->Tanggal," "));
    //         // $Tahun[] = substr($lb->Tanggal,strpos($lb->Tanggal," "),5);
    //         $Bulan[] = Carbon::createFromFormat('Y-m-d', $lb->Tanggal)->format('F');
    //         $Tahun[] = Carbon::createFromFormat('Y-m-d', $lb->Tanggal)->format('Y');
    //     }

    //     return view('visual')->with('Laba', $Laba)->with('Bulan', $Bulan)->with('Tahun', $Tahun)->with('penghasilan', $penghasilan);
    // }

    // public function a()
    // {

    //     return view('view');
    // }

    public function addBangunan(Request $request)
    {
        $last = DB::table('_bangunan')->orderBy('ID_Bangunan','desc')->pluck('ID_Bangunan')->first();
        $count = DB::table('_bangunan')->count();
        $a= 'B';
        $lastdigit = substr($last,2,5);
        $cc = (int)$lastdigit;
        // $request->validate([
        //     'Nama' => ['required'],
        //     'Alamat' => ['required'],
        // ]);
        $Bangunan = new Bangunan;

        if ($count < 1) {
            $Bangunan->ID_Bangunan =  $a.str_pad(+1, 4, '0', STR_PAD_LEFT);
        } else {
            $Bangunan->ID_Bangunan =  $a.str_pad($cc+1, 4, '0', STR_PAD_LEFT);
        }
        $Bangunan->ID_Pemilik = Auth::user()->ID_Pemilik ;
        $Bangunan->Nama = $request->NamaBangunan;
        $Bangunan->Alamat = $request->Alamat;
        $Bangunan->save();

        return Redirect::back()->with('message', 'Berhasil');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function addData (Request $request){
        $last = DB::table('_pegawai')->orderBy('ID_Pegawai','desc')->pluck('ID_Pegawai')->first();
        $count = DB::table('_pegawai')->count();
        $a= 'P';
        $lastdigit = substr($last,2,5);
        $cc = (int)$lastdigit;
        $Pegawai = new Pegawai;


        // $pegawairecords = [];

        // foreach($request->NamaPegawai as $key=>$insert)
        // {
        //         $pegawairecords[] = [
        //             'NamaPegawai' => $$request->NamaPegawai[$key],
        //             'Tipe' => $request->Peran[$key],
        //             'Gaji' => $request->Gaji[$key],
        //             'ID_Bangunan' => $request->Gedung[$key],
        //             'ID_Pegawai' => +1,
        //         ];
        //         // dd($key);
        //                 // Pegawai::insert($pegawairecords);
        //         DB::table('_pegawai')->insert($pegawairecords);
        // }

        $data=$request->all();
        // $lastid=Orders::create($data)->id;
        if(count($request->NamaPegawai) > 0)
        {
        foreach($request->NamaPegawai as $item=>$v){
            $data2=array(
                'NamaPegawai' => $$request->NamaPegawai[$item],
                'Tipe' => $request->Peran[$item],
                'Gaji' => $request->Gaji[$item],
                'ID_Bangunan' => $request->Gedung[$item],
                'ID_Pegawai' => +1,
            );
        Pegawai::insert($data2);
      }
        }

            return Redirect::back()->with('message', 'Berhasil');
        }

    public function addFasilitas(Request $request)
    {
        $last = DB::table('_bangunan')->orderBy('ID_Bangunan','desc')->pluck('ID_Bangunan')->first();
        $count = DB::table('_bangunan')->count();
        $a= 'B';
        $lastdigit = substr($last,2,5);
        $cc = (int)$lastdigit;
        // $request->validate([
        //     'Nama' => ['required'],
        //     'Alamat' => ['required'],
        // ]);
        $Bangunan = new Bangunan;

        if ($count < 1) {
            $Bangunan->ID_Bangunan =  $a.str_pad(+1, 4, '0', STR_PAD_LEFT);
        } else {
            $Bangunan->ID_Bangunan =  $a.str_pad($cc+1, 4, '0', STR_PAD_LEFT);
        }
        $Bangunan->ID_Pemilik = Auth::user()->ID_Pemilik ;
        $Bangunan->Nama = $request->NamaBangunan;
        $Bangunan->Alamat = $request->Alamat;
        $Bangunan->save();

        return Redirect::back()->with('message', 'Berhasil');
    }

    public function DeleteBangunan($id){
        DB::table('_bangunan')->where('ID_Bangunan', $id)->delete();
        return Redirect::back();
    }

    // function autonumber($id_terakhir, $panjang_kode, $panjang_angka) {

    //     // mengambil nilai kode ex: KNS0015 hasil KNS
    //     $kode = substr($id_terakhir, 0, $panjang_kode);

    //     // mengambil nilai angka
    //     // ex: KNS0015 hasilnya 0015
    //     $angka = substr($id_terakhir, $panjang_kode, $panjang_angka);

    //     // menambahkan nilai angka dengan 1
    //     // kemudian memberikan string 0 agar panjang string angka menjadi 4
    //     // ex: angka baru = 6 maka ditambahkan strig 0 tiga kali
    //     // sehingga menjadi 0006
    //     $angka_baru = str_repeat("0", $panjang_angka - strlen($angka+1)).($angka+1);

    //     // menggabungkan kode dengan nilang angka baru
    //     $id_baru = $kode.$angka_baru;

    //     return $id_baru;
    // }

}
