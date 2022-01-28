<?php

namespace App\Http\Controllers;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Penghasilan;
use App\Models\Fasilitas;
use App\Models\Bangunan;
use App\Models\Kamar;
use App\Models\Pegawai;
use App\Models\Transaksi;
use App\Models\Pelanggan;
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
        // $Bangunan1 = DB::table('_bangunan')->join('_transaksi', '_transaksi.ID_Bangunan', '=', '_bangunan.ID_Bangunan')->join('_fasilitas', '_bangunan.ID_Bangunan', '=', '_fasilitas.ID_Bangunan')->where('_bangunan.ID_Pemilik', $id)
        // ->select(DB::raw('SUM(Nominal) as totalamount, (_transaksi.ID_Bangunan) as month'))
        // ->groupBy(DB::raw('MONTH(_transaksi.ID_Bangunan) ASC'))->get();
        // $nominal = [];
        // foreach($Bangunan1 as $b){
        //     $nominal[] = $b->totalamount;
        // }
        // dd($nominal);

        $datenow = Carbon::now();
        $Month = $datenow->format('F');
        $Year = $datenow->format('Y');


        return view('visual')->with('bangunan', $Bangunan)->with('tahunini', $Year);
    }

    public function update($id, $idb)
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

        // $pelanggan = DB::table('_pelanggan')
        // ->join('_transaksi','_transaksi.ID_Pelanggan','=','_pelanggan.ID_Pelanggan')
        // ->join('_bangunan', '_transaksi.ID_Bangunan', '=', '_bangunan.ID_Bangunan')
        // ->join('_kamar', '_kamar.ID_Kamar', '=', '_transaksi.ID_Kamar')
        // ->where('_bangunan.ID_Pemilik', $id)
        // ->where('_bangunan.ID_Bangunan', $idb)->get();
        // // ->whereYear('_transaksi.Tanggal', $ids)->get();

        $kamar = DB::table('_kamar')->join('_bangunan', '_kamar.ID_Bangunan', '=', '_bangunan.ID_Bangunan')
        ->where('_bangunan.ID_Pemilik', $id)
        ->where('_bangunan.ID_Bangunan', $idb)->get();
        $transaksi = DB::table('_transaksi')->join('_bangunan', '_transaksi.ID_Bangunan', '=', '_bangunan.ID_Bangunan')
        // ->join('_pelanggan', '_transaksi.ID_Pelanggan', '=', '_pelanggan.ID_Pelanggan')
        ->where('_bangunan.ID_Pemilik', $id)
        ->where('_bangunan.ID_Bangunan', $idb)//year
        ->whereYear('Tanggal', $ids)->get();
        $transaksilist = DB::table('_transaksi')->join('_kamar', '_transaksi.ID_Kamar', '=', '_kamar.ID_Kamar')->join('_bangunan', '_transaksi.ID_Bangunan', '=', '_bangunan.ID_Bangunan')
        ->join('_pelanggan', '_transaksi.ID_Pelanggan', '=', '_pelanggan.ID_Pelanggan')
        ->where('_bangunan.ID_Pemilik', $id)
        ->where('_bangunan.ID_Bangunan', $idb)//year
        ->whereYear('Tanggal', $ids)->paginate(20);
        $transaksi1 = DB::table('_transaksi')->join('_kamar', '_transaksi.ID_Kamar', '=', '_kamar.ID_Kamar')->join('_bangunan', '_transaksi.ID_Bangunan', '=', '_bangunan.ID_Bangunan')
        ->join('_pelanggan', '_transaksi.ID_Pelanggan', '=', '_pelanggan.ID_Pelanggan')
        ->where('_bangunan.ID_Pemilik', $id)
        ->where('_bangunan.ID_Bangunan', $idb)//year
        ->whereYear('Tanggal', $ids)->get();
        $transaksi2 = DB::table('_transaksi')->join('_kamar', '_transaksi.ID_Kamar', '=', '_kamar.ID_Kamar')->join('_bangunan', '_transaksi.ID_Bangunan', '=', '_bangunan.ID_Bangunan')
        ->join('_pelanggan', '_transaksi.ID_Pelanggan', '=', '_pelanggan.ID_Pelanggan')
        ->where('_bangunan.ID_Pemilik', $id)
        ->where('_bangunan.ID_Bangunan', $idb)//year
        ->whereYear('Tanggal', $ids)->value('LamaSewa');

        // $next = [];
        // foreach($transaksi as $tr){
        //     $next[] = $tr->LamaSewa;
        // }
        // $nextmonth = [];
        // foreach($transaksi as $tr){
        //     $nextmonth[] = $tr->Tanggal->addMonths($transaksi1->LamaSewa);
        //     // $nextmonth[] = $tr->Tanggal->subMonths($array);
        // }
        //         dd($nextmonth);

        $nominal = DB::table('_transaksi')->join('_bangunan', '_transaksi.ID_Bangunan', '=', '_bangunan.ID_Bangunan')
        // ->join('_pelanggan', '_transaksi.ID_Pelanggan', '=', '_pelanggan.ID_Pelanggan')
        ->where('_bangunan.ID_Pemilik', $id)
        ->where('_bangunan.ID_Bangunan', $idb)
         ->whereYear('Tanggal', $ids)->get();
         $nominal1 = DB::table('_transaksi')->join('_bangunan', '_transaksi.ID_Bangunan', '=', '_bangunan.ID_Bangunan')
         // ->join('_pelanggan', '_transaksi.ID_Pelanggan', '=', '_pelanggan.ID_Pelanggan')
         ->where('_bangunan.ID_Pemilik', $id)
         ->where('_bangunan.ID_Bangunan', $idb)
          ->whereYear('Tanggal', $ids)
          ->select(DB::raw('SUM(Nominal) as totalamount, MONTH(Tanggal) as month'))
          ->groupBy(DB::raw('MONTH(Tanggal) ASC'))->get();
          $nominal2 = DB::table('_transaksi')->join('_bangunan', '_transaksi.ID_Bangunan', '=', '_bangunan.ID_Bangunan')
          // ->join('_pelanggan', '_transaksi.ID_Pelanggan', '=', '_pelanggan.ID_Pelanggan')
          ->where('_bangunan.ID_Pemilik', $id)
          ->where('_bangunan.ID_Bangunan', $idb)
           ->get();

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
        foreach($transaksi1 as $bb){
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
        // dd($bulanTransaksi);

        foreach ($fasilitas as $lb) {
            $WIFI[] = $lb->WIFI;
            $Listrik[] = $lb->Listrik;
            $Pengeluaran += $lb->Pengeluaran;
            $Pemeliharaan[] = $lb->Pemeliharaan;
        }

        // foreach ($penghasilan as $lb) {
        //     $Laba[] = $lb->LabaBersih;
        //     $TotalLaba += $lb->LabaBersih;
        //      // $Bulan[] = substr($lb->Tanggal,0,strpos($lb->Tanggal," "));
        //     // $Tahun[] = substr($lb->Tanggal,strpos($lb->Tanggal," "),5);
        //     $Bulan[] = Carbon::createFromFormat('Y-m-d', $lb->Tanggal)->format('F');
        //     $Tahun[] = Carbon::createFromFormat('Y-m-d', $lb->Tanggal)->format('Y');
        // }
        // dd($Laba);
        // foreach ($penghasilan1 as $lb) {
        //     $Tahun1[] = Carbon::createFromFormat('Y-m-d', $lb->Tanggal)->format('Y');
        // }

        $Tahun2 = [];
        foreach ($nominal2 as $lb) {
                $Tahun2[] = Carbon::createFromFormat('Y-m-d', $lb->Tanggal)->format('Y');
            }
            $ab =  array_count_values($Tahun2);
            $ab1 =  array_keys($ab);


        foreach ($fasilitas as $lb) {
        // foreach ($nominal as $lb) {
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

        $Hitung = 0;
        $tangal = [];
        foreach($nominal as $a){
           $Hitung += $a->Nominal;
           $tangal[] =  Carbon::createFromFormat('Y-m-d', $a->Tanggal)->format('F');;
        }
        $countbulan1 = count($Bulan);
        $hitunggajiperbulan =  $countbulan1*$Gaji;
        $LabaBersih = $Hitung-$Pengeluaran-$hitunggajiperbulan;
        $labaperbulan = [];
        foreach($nominal1 as $a){
         $labaperbulan[] = (int)$a->totalamount;
        }
        // dd($labaperbulan);

        $New = array_count_values($tangal);
        $BulanLaba = array_keys($New);
        // dd($labaperbulan);

        $total = number_format($Pengeluaran,2,',','.');
        // $totallababersih = number_format($TotalLaba,2,',','.');
        $totallababersih = number_format($LabaBersih,2,',','.');
        $totalGaji = number_format($Gaji,2,',','.');
        // $LABA = number_format($labaperbulan,2,',','.');
        $coba = array_count_values($Tahun1);
        $av = $idb;
        $ta = $ids;
        $ak = array_keys($coba);


        // $LabaKotor = 0;
        // foreach($transaksi as $tr){
        //     $LabaKotor += ;
        // }
        // $Lababershih = $LabaKotor-$totalGaji;

        return view('example')->with('Laba', $labaperbulan)->with('Bulan', $Bulan)->with('BulanLaba', $BulanLaba)->with('Tahun', $Tahun)->with('WIFI', $WIFI)->with('Listrik', $Listrik)->with('Pengeluaran', $Pengeluaran)->with('Pemeliharaan', $Pemeliharaan)
        ->with('Pengeluaran', $total)->with('TotalLaba', $totallababersih)->with('totalGaji', $totalGaji)->with('pegawai', $pegawai)
        ->with('value', $array_values)->with('key', $array_keys)->with('year', $Year)->with('bulanTransaksi', $bulanTransaksi)->with('countbulan', $countbulan)
        ->with('r', $r)->with('tahunini', $tahunini)->with('av', $av)->with('Tahundrop', $ak)->with('Bangunan', $Bangunan)->with('ta', $ta)->with('kamar', $kamar)
        ->with('transaksi', $transaksi1) ->with('transaksi1', $transaksilist)->with('faslitas', $fasilitas)->with('ab1', $ab1);
    }

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
        $Pegawai = new Pegawai;

        $data=$request->all();
        if(count($data) > 0)
        {
        foreach($request->NamaPegawai as $item=>$value){
            $last = DB::table('_pegawai')->orderBy('ID_Pegawai','desc')->pluck('ID_Pegawai')->first();
            $count = DB::table('_pegawai')->count();
            $a= 'P';
            $lastdigit = substr($last,2,5);
            $cc = (int)$lastdigit;
            $id =[];
            if ($count < 1) {
                $id=  $a.str_pad(+1, 4, '0', STR_PAD_LEFT);
            } else {
                $id =  $a.str_pad($cc+1, 4, '0', STR_PAD_LEFT);
            }
            $Pegawai::insert([
                'ID_Pegawai'=>$id,
                'ID_Bangunan'=>$request->Gedung[$item],
                'NamaPegawai'=>$request->NamaPegawai[$item],
                'Alamat'=>$request->Alamat[$item],
                'Peran'=>$request->Peran[$item],
                'Gaji'=>$request->Gaji[$item],
            ]);
            // dd($data2);
      }
        }

            return Redirect::back()->with('message', 'Berhasil');
        }

        public function addData2 (Request $request, $id){
            $Pegawai = new Pegawai;

            $data=$request->all();
            // dd($data);
            if(count($data) > 0)
            {
            foreach($request->NamaPegawai as $item=>$value){
                $last = DB::table('_pegawai')->orderBy('ID_Pegawai','desc')->pluck('ID_Pegawai')->first();
                $count = DB::table('_pegawai')->count();
                $a= 'P';
                $lastdigit = substr($last,2,5);
                $cc = (int)$lastdigit;
                $Pe =[];
                if ($count < 1) {
                    $Pe=  $a.str_pad(+1, 4, '0', STR_PAD_LEFT);
                } else {
                    $Pe =  $a.str_pad($cc+1, 4, '0', STR_PAD_LEFT);
                }
                $v = $id;
                $Pegawai::insert([
                    'ID_Pegawai'=>$Pe,
                    'ID_Bangunan'=>$v,
                    'NamaPegawai'=>$request->NamaPegawai[$item],
                    'Alamat'=>$request->Alamat[$item],
                    'Peran'=>$request->Peran[$item],
                    'Gaji'=>$request->Gaji[$item],
                ]);
                // dd($data2);
          }
            }

                return Redirect::back()->with('message', 'Berhasil');
            }

            public function addTran (Request $request, $id){
                $Pelanggan = new PeLanggan;
                $Transaksi = new Transaksi;

                $data=$request->all();
                if(count($data) > 0)
                {
                foreach($request->Tipe as $item=>$value){
                    //Pelanggan
                    $last = DB::table('_pelanggan')->orderBy('ID_Pelanggan','desc')->pluck('ID_Pelanggan')->first();
                    $count = DB::table('_pelanggan')->count();
                    $a= 'C';
                    $lastdigit = substr($last,2,5);
                    $cc = (int)$lastdigit;
                    $Pe =[];
                    if ($count < 1) {
                        $Pe=  $a.str_pad(+1, 4, '0', STR_PAD_LEFT);
                    } else {
                        $Pe =  $a.str_pad($cc+1, 4, '0', STR_PAD_LEFT);
                    }
                    $v = $id;
                    $pemilik = Auth::user()->ID_Pemilik ;


                    // $nominal = DB::table('_transaksi')
                    // ->join('_kamar', '_transaksi.ID_Kamar', '=', '_kamar.ID_Kamar')->where('_kamar.ID_Kamar', $request->Tipe[$item])->pluck('BiayaKamar');
                    $nominal = DB::table('_kamar')
                    ->where('_kamar.ID_Kamar', $request->Tipe[$item])->value('BiayaKamar');
                    $c = $nominal;
                    $b = (int)$request->Long[$item];
                    $n = $c;
                    $status =[];
                    $a = $b * $n;
                    if($request->Long[$item] == 0){
                        $status = 'Belum Lunas';
                    }else{
                        $status = 'Lunas';
                    }

                    //Transaksi
                    $last1 = DB::table('_transaksi')->orderBy('ID_Transaksi','desc')->pluck('ID_Transaksi')->first();
                    $count1 = DB::table('_transaksi')->count();
                    $a1= 'T';
                    $lastdigit1 = substr($last1,2,5);
                    $cc1 = (int)$lastdigit1;
                    $Pa =[];
                    if ($count1 < 1) {
                        $Pa =  $a1.str_pad(+1, 4, '0', STR_PAD_LEFT);
                    } else {
                        $Pa =  $a1.str_pad($cc1+1, 4, '0', STR_PAD_LEFT);
                    }
                    $int = (int)$request->Long[$item];
                    $mont = Carbon::parse($request->Date[$item])->addMonth($int)->format('Y-m-d');

                    $Pelanggan::insert([
                        'ID_Pelanggan'=>$Pe,
                        'ID_Kamar'=>$request->Tipe[$item],
                        'Namapelanggan'=>$request->Nama[$item],
                        'Notelp'=> $request->Telp[$item],
                    ]);
                    $Transaksi::insert([
                        'ID_Transaksi'=>$Pa,
                        'ID_Bangunan'=>$v,
                        'ID_Pemilik'=>$pemilik,
                        'ID_Kamar'=>$request->Tipe[$item],
                        'ID_Pelanggan'=>$Pe,
                        'Tanggal'=>$request->Date[$item],
                        'LamaSewa'=>$request->Long[$item],
                        'Nominal'=>$a,
                        'TanggalKeluar'=>$mont,
                        'Status'=>$status,
                    ]);
                    // $Penghasilan::insert([
                    //     'ID_Transaksi'=>$Pa,
                    //     'ID_Bangunan'=>$v,
                    //     'ID_Pemilik'=>$pemilik,
                    //     'ID_Kamar'=>$request->Tipe[$item],
                    //     'ID_Pelanggan'=>$Pe,
                    //     'Tanggal'=>$request->Date[$item],
                    // ]);
                    // dd($data2);
              }
                }

                    return Redirect::back()->with('message', 'Berhasil');
                }


    public function addFasilitas(Request $request, $id)
    {
        $Fasilitas = new Fasilitas;

        $data=$request->all();
        // dd($data);
        if(count($data) > 0)
        {
        foreach($request->WIFI as $item=>$value){
            $last = DB::table('_fasilitas')->orderBy('ID_Fasilitas','desc')->pluck('ID_Fasilitas')->first();
            $count = DB::table('_fasilitas')->count();
            $a= 'F';
            $lastdigit = substr($last,2,5);
            $cc = (int)$lastdigit;
            $Pe =[];
            if ($count < 1) {
                $Pe=  $a.str_pad(+1, 4, '0', STR_PAD_LEFT);
            } else {
                $Pe =  $a.str_pad($cc+1, 4, '0', STR_PAD_LEFT);
            }
            $v = $id;
            $Fasilitas::insert([
                'ID_Fasilitas'=>$Pe,
                'ID_Bangunan'=>$v,
                'WIFI'=>$request->WIFI[$item],
                'Listrik'=>$request->Electric[$item],
                'Pemeliharaan'=>$request->Maintanance[$item],
                'Pengeluaran'=>$request->WIFI[$item]+$request->Electric[$item]+$request->Maintanance[$item],
                'Tanggal'=>$request->Date[$item],
            ]);
      }
        }

                return Redirect::back()->with('message', 'Berhasil');
    }

    public function addKamar(Request $request, $id)
    {
        $Kamar = new Kamar;

        $data=$request->all();
        // dd($data);
        if(count($data) > 0)
        {
        foreach($request->TipeKamar as $item=>$value){
            $last = DB::table('_kamar')->orderBy('ID_Kamar','desc')->pluck('ID_Kamar')->first();
            $count = DB::table('_kamar')->count();
            $a= 'K';
            $lastdigit = substr($last,2,5);
            $cc = (int)$lastdigit;
            $Pe =[];
            if ($count < 1) {
                $Pe=  $a.str_pad(+1, 4, '0', STR_PAD_LEFT);
            } else {
                $Pe =  $a.str_pad($cc+1, 4, '0', STR_PAD_LEFT);
            }
            $v = $id;
            $Kamar::insert([
                'ID_Kamar'=>$Pe,
                'ID_Bangunan'=>$v,
                'TipeKamar'=>$request->TipeKamar[$item],
                'JumlahKamar'=>$request->JumlahKamar[$item],
                'BiayaKamar'=>$request->BiayaKamar[$item],
            ]);
      }
        }

                return Redirect::back()->with('message', 'Berhasil');
    }

    public function deleteBangunan($id){
        DB::table('_bangunan')->where('ID_Bangunan', $id)->delete();
        return Redirect::back();
    }

    public function deletePegawai($id){
        DB::table('_pegawai')->where('ID_Pegawai', $id)->delete();
        return Redirect::back();
    }

    public function deleteTransaksi($id){
        DB::table('_transaksi')->where('ID_Transaksi', $id)->delete();
        return Redirect::back();
    }

    public function deleteFasilitas($id){
        DB::table('_fasilitas')->where('ID_Fasilitas', $id)->delete();
        return Redirect::back();
    }

    public function deleteKamar($id){
        DB::table('_kamar')->where('ID_Kamar', $id)->delete();
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
