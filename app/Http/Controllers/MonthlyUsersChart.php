<?php

namespace App\Http\Controllers;

use ArielMejiaDev\LarapexCharts\LarapexChart;
use App\Models\Penghasilan;
use DB;
use Illuminate\Support\Facades\DB as FacadesDB;
use Redirect;

class MonthlyUsersChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\BarChart
    {
        // return $this->chart->barChart()
        //     ->setTitle('San Francisco vs Boston.')
        //     ->setSubtitle('Wins during season 2021.')
        //     ->addData('San Francisco', [6, 9, 3, 4, 10, 8])
        //     ->addData('Boston', [7, 3, 8, 2, 6, 4])
        //     ->setXAxis(['January', 'February', 'March', 'April', 'May', 'June']);

        // $penghasilan = DB::table('_penghasilan')->whereMonth('Tanggal', '=', '01')->get();
                    $penghasilan = Penghasilan::pluck('ID_Penghasilan');
                    // $penghasilan = new Penghasilan()

        return $this->chart->barChart()
        ->setTitle('San Francisco vs Boston.')
        ->setSubtitle('Wins during season 2021.')
        ->addData([
            // \App\Models\Penghasilan::whereMonth('Tanggal', '=', '06')->get(),
            $penghasilan->ID_Penghasilan()
        ])

        ->setXAxis(['January', 'February', 'March', 'April', 'May', 'June']);
    }
}
