<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\User;
use App\Models\Penghasilan;
use App\Models\Fasilitas;
use App\Models\Bangunan;
use App\Models\Pegawai;
use App\Models\Transaksi;
use App\Models\Kamar;
use App\Models\Pelanggan;
use Redirect;

class UpdateController extends Controller
{
    public function editprofile($id)
    {
        $User = DB::table('users')->where('ID_Pemilik', $id)->pluck('ID_Pemilik');
        $User1 = DB::table('users')->where('ID_Pemilik', $id)->get();
        // dd($User);

        return view('editprofile')->with('users', $User)->with('users1', $User1);
    }

    public function updateprofile(Request $request, $id)
    {
        // $request->validate([
        //     'name' => ['required', 'string', 'max:255'],
        //     'email' => ['required', 'string', 'email', 'max:255'],
        //     'phone' => ['required','string',],
        // ]);
        $user = new User;
        User::where('ID_Pemilik', $id)->update([
                    'name' => $request->name,
                    'TempatTanggalLahir' => $request->tempat.' '.$request->tanggal,
                    'Alamat'=>$request->alamat,
                ]);

        return Redirect::back()->with('success', 'Update Success!');
    }

    public function editBangunan($id)
    {
        $Bangunan = DB::table('_bangunan')->where('_bangunan.ID_Pemilik', $id)->get();
        $Bangunan1 = DB::table('_bangunan')->where('_bangunan.ID_Pemilik', $id)->pluck('ID_Bangunan');
        $ID = $id;

        return view('editBangunan')->with('Bangunan', $Bangunan1)->with('id', $ID);
    }

    public function updateBagunan(Request $request, $id)
    {
        // $request->validate([
        //     'name' => ['required', 'string', 'max:255'],
        //     'email' => ['required', 'string', 'email', 'max:255'],
        //     'phone' => ['required','string',],
        // ]);
        $Bangunan = new Bangunan;
        Bangunan::where('ID_Bangunan', $id)->update([
                    'Nama' => $request->NamaBangunan,
                    'Alamat' => $request->Alamat,
                ]);

        return Redirect::back()->with('success', 'Update Success!');
    }

    public function editPegawai($id, $idp, $ids)
    {
        $Pegawai = DB::table('_pegawai')->where('_pegawai.ID_Pegawai', $id)->get();
        $Pegawai1 = DB::table('_pegawai')->where('_pegawai.ID_Pegawai', $id)->pluck('ID_Pegawai');
        $ID = $id;
        $IDP = $idp;
        $IDS = $ids;

        return view('editPegawai')->with('Pegawai', $Pegawai)->with('id', $ID)->with('idp', $IDP)->with('ids', $IDS);
    }

    public function updatePegawai(Request $request, $id)
    {
        // $request->validate([
        //     'name' => ['required', 'string', 'max:255'],
        //     'email' => ['required', 'string', 'email', 'max:255'],
        //     'phone' => ['required','string',],
        // ]);
        // $Bangunan = new Bangunan;
        Pegawai::where('ID_Pegawai', $id)->update([
                    'NamaPegawai' => $request->NamaPegawai,
                    'Alamat' => $request->Alamat,
                    'Peran' => $request->Peran,
                    'Gaji' => $request->Gaji,
                ]);

        return Redirect::back()->with('success', 'Update Success!');
    }

    public function editTransaksi($id, $idp, $ids)
    {
        $transaksi1 = DB::table('_transaksi')->join('_kamar', '_transaksi.ID_Kamar', '=', '_kamar.ID_Kamar')->join('_bangunan', '_transaksi.ID_Bangunan', '=', '_bangunan.ID_Bangunan')
        ->join('_pelanggan', '_transaksi.ID_Pelanggan', '=', '_pelanggan.ID_Pelanggan')
        ->where('ID_Transaksi', $id)->pluck('NamaPelanggan');
        $transaksi2 = DB::table('_transaksi')->join('_kamar', '_transaksi.ID_Kamar', '=', '_kamar.ID_Kamar')->join('_bangunan', '_transaksi.ID_Bangunan', '=', '_bangunan.ID_Bangunan')
        ->join('_pelanggan', '_transaksi.ID_Pelanggan', '=', '_pelanggan.ID_Pelanggan')
        ->where('ID_Transaksi', $id)->pluck('LamaSewa');
        $transaksi3 = DB::table('_transaksi')->join('_kamar', '_transaksi.ID_Kamar', '=', '_kamar.ID_Kamar')->join('_bangunan', '_transaksi.ID_Bangunan', '=', '_bangunan.ID_Bangunan')
        ->join('_pelanggan', '_transaksi.ID_Pelanggan', '=', '_pelanggan.ID_Pelanggan')
        ->where('ID_Transaksi', $id)->pluck('Status');
        $transaksi4 = DB::table('_transaksi')->join('_kamar', '_transaksi.ID_Kamar', '=', '_kamar.ID_Kamar')->join('_bangunan', '_transaksi.ID_Bangunan', '=', '_bangunan.ID_Bangunan')
        ->join('_pelanggan', '_transaksi.ID_Pelanggan', '=', '_pelanggan.ID_Pelanggan')
        ->where('ID_Transaksi', $id)->pluck('TipeKamar');
        $transaksi5 = DB::table('_transaksi')->join('_kamar', '_transaksi.ID_Kamar', '=', '_kamar.ID_Kamar')->join('_bangunan', '_transaksi.ID_Bangunan', '=', '_bangunan.ID_Bangunan')
        ->join('_pelanggan', '_transaksi.ID_Pelanggan', '=', '_pelanggan.ID_Pelanggan')
        ->where('ID_Transaksi', $id)->pluck('Tanggal');

        $kamar = DB::table('_kamar')->join('_bangunan', '_kamar.ID_Bangunan', '=', '_bangunan.ID_Bangunan')
        ->where('_bangunan.ID_Bangunan', $idp)->get();

        $ID = $id;
        $IDP = $idp;
        $IDS = $ids;

        return view('editTransaksi')->with('id', $ID)->with('idp', $IDP)->with('ids', $IDS)->with('kamar1', $transaksi4)->with('kamar', $kamar)
        ->with('lama', $transaksi2)->with('nama', $transaksi1)->with('status', $transaksi3)->with('tanggal', $transaksi5);
    }

    public function updateTransaksi(Request $request, $id)
    {
        $transaksi1 = DB::table('_transaksi')->join('_kamar', '_transaksi.ID_Kamar', '=', '_kamar.ID_Kamar')->join('_bangunan', '_transaksi.ID_Bangunan', '=', '_bangunan.ID_Bangunan')
        ->join('_pelanggan', '_transaksi.ID_Pelanggan', '=', '_pelanggan.ID_Pelanggan')
        ->where('ID_Transaksi', $id)->pluck('_transaksi.ID_Pelanggan');
        // $request->validate([
        //     'Status' => ['required', 'string', 'max:255'],
        //     'NamaPelanggan' => ['required', 'string'],
        //     'lamaSewa' => ['required','integer'],
        // ]);
        Transaksi::where('ID_Transaksi', $id)->update([
                    'Status' => $request->Status,
                    // 'ID_Kamar' => $request->TipeKamar,
                ]);
                Pelanggan::where('ID_Pelanggan', $transaksi1)->update([
                    'NamaPelanggan' => $request->NamaPelanggan,
                    // 'ID_Kamar' => $request->TipeKAmar,
                    'LamaSewa' => $request->LamaSewa,
                ]);

        return Redirect::back()->with('success', 'Update Success!');
    }

    public function editFasilitas($id, $idp, $ids)
    {
        $Fasilitas = DB::table('_fasilitas')->where('ID_Fasilitas', $id)->pluck('Tanggal');
        $ID = $id;
        $IDP = $idp;
        $IDS = $ids;

        return view('editFasilitas')->with('tanggal', $Fasilitas)->with('id', $ID)->with('idp', $IDP)->with('ids', $IDS);
    }

    public function updateFasilitas(Request $request, $id)
    {
        // $request->validate([
        //     'name' => ['required', 'string', 'max:255'],
        //     'email' => ['required', 'string', 'email', 'max:255'],
        //     'phone' => ['required','string',],
        // ]);
        // $Bangunan = new Bangunan;
        Fasilitas::where('ID_Fasilitas', $id)->update([
                    'WIFI' => $request->WIFI,
                    'Listrik' => $request->Listrik,
                    'Pemeliharaan' => $request->Pemeliharaan,
                    'Pengeluaran' => $request->WIFI+$request->Listrik+$request->Pemeliharaan,

                ]);

        return Redirect::back()->with('success', 'Update Success!');
    }

    public function editKamar($id, $idp, $ids)
    {
        $Kamar = DB::table('_kamar')->where('ID_Kamar', $id);
        $ID = $id;
        $IDP = $idp;
        $IDS = $ids;

        return view('editKamar')->with('id', $ID)->with('idp', $IDP)->with('ids', $IDS);
    }

    public function updateKamar(Request $request, $id)
    {
        // $request->validate([
        //     'name' => ['required', 'string', 'max:255'],
        //     'email' => ['required', 'string', 'email', 'max:255'],
        //     'phone' => ['required','string',],
        // ]);
        // $Bangunan = new Bangunan;
        Kamar::where('ID_Kamar', $id)->update([
                    'TipeKamar' => $request->TipeKamar,
                    'JumlahKamar' => $request->JumlahKamar,
                    'BiayaKamar' => $request->BiayaKamar,
                ]);

        return Redirect::back()->with('success', 'Update Success!');
    }

}
