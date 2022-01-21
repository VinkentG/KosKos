<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai;
// use DB;
// use Carbon\Carbon;
// use Redirect;

class OrderController extends Controller
{
    public function home()
    {
        return view('view');
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
        // $last = DB::table('_pegawai')->orderBy('ID_Pegawai','desc')->pluck('ID_Pegawai')->first();
        // $count = DB::table('_pegawai')->count();
        // $a= 'P';
        // $lastdigit = substr($last,2,5);
        // $cc = (int)$lastdigit;
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
            dd($data2);
        Pegawai::insert($data2);
      }
        }

            return Redirect::back()->with('message', 'Berhasil');
        }

    public function store(Request $request)
    {
        $data=$request->all();
        // $lastid=Orders::create($data)->id;
        if(count($request->product_name) > 0)
        {
        foreach($request->product_name as $item=>$v){
            $data2=array(
                'orders_id'=>+1,
                'product_name'=>$request->product_name[$item],
                'brand'=>$request->brand[$item],
                'quantity'=>$request->quantity[$item],
                'budget'=>$request->budget[$item],
                'amount'=>$request->amount[$item]
            );
            dd($data2);
        Pegawai::insert($data2);
      }
        }
        return redirect()->back()->with('success','data insert successfully');
    }


}
