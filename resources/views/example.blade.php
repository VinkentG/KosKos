@extends('layouts.app')
@section('Nav1')
    <li class="scroll-to-section"><a class="nav-link" href="/home">Home</a></li>
@endsection
<style>
    .body1 {
        background: #343E59;
        color: #777;
        font-family: Montserrat, Arial, sans-serif;
    }

    .body-bg {
        background: #F3F4FA !important;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    strong {
        font-weight: 600;
    }

    body {
        /*background: linear-gradient(45deg,#3a3a60,#5f5f8e);
  min-height: 100vh;*/
    }

    .content-area {
        max-width: 1280px;
        margin: 0 auto;
    }

    .box {
        background-color: #2B2D3E;
        padding: 25px 20px;
    }

    .shadow {
        box-shadow: 0px 1px 15px 1px rgba(69, 65, 78, 0.08);
    }

    .sparkboxes .box {
        padding-top: 10px;
        padding-bottom: 10px;
        text-shadow: 0 1px 1px 1px #666;
        box-shadow: 0px 1px 15px 1px rgba(69, 65, 78, 0.08);
        position: relative;
        border-radius: 5px;
    }

    .sparkboxes .box .details {
        position: absolute;
        color: #fff;
        transform: scale(0.7) translate(-22px, 20px);
    }

    .sparkboxes strong {
        position: relative;
        z-index: 3;
        top: -8px;
        color: #fff;
    }


    .sparkboxes .box1 {
        background-image: linear-gradient(135deg, #ABDCFF 10%, #0396FF 100%);
    }

    .sparkboxes .box2 {
        background-image: linear-gradient(135deg, #2AFADF 10%, #4C83FF 100%);
    }

    .sparkboxes .box3 {
        background-image: linear-gradient(135deg, #FFD3A5 10%, #FD6585 100%);
    }

    .sparkboxes .box4 {
        background-image: linear-gradient(135deg, #EE9AE5 10%, #5961F9 100%);
    }

    .h1 {
        color: white;
    }

    .text1 {
        margin-left: auto;
    }

    .text2 {
        font-weight: bold;
        /* color: red; */
    }

    .btn {
        margin-bottom: 10px;
    }

    .btn-text {
        color: white;
    }

    /* .btn-text .a{
    color: #f0ad4e;
} */

</style>

@section('content')

    <body class="body1">
        <div id="wrapper">
            <div class="content-area">
                <div class="container-fluid">



                    <div class="text-right mb-3 d-fixed">
                        <a class="btn btn-outline-warning ">
                            <span class="btn-text" data-toggle="modal" data-target="#question"><svg xmlns="http://www.w3.org/2000/svg"
                                    width="16" height="16" fill="currentColor" class="bi bi-question-lg" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M4.475 5.458c-.284 0-.514-.237-.47-.517C4.28 3.24 5.576 2 7.825 2c2.25 0 3.767 1.36 3.767 3.215 0 1.344-.665 2.288-1.79 2.973-1.1.659-1.414 1.118-1.414 2.01v.03a.5.5 0 0 1-.5.5h-.77a.5.5 0 0 1-.5-.495l-.003-.2c-.043-1.221.477-2.001 1.645-2.712 1.03-.632 1.397-1.135 1.397-2.028 0-.979-.758-1.698-1.926-1.698-1.009 0-1.71.529-1.938 1.402-.066.254-.278.461-.54.461h-.777ZM7.496 14c.622 0 1.095-.474 1.095-1.09 0-.618-.473-1.092-1.095-1.092-.606 0-1.087.474-1.087 1.091S6.89 14 7.496 14Z" />
                                </svg></span>
                        </a>
                        <div class="btn-group dropleft  btn-outline-warning mr-2 btn-lg">
                            <a type="button" class="btn btn-secondary btn-outline-warning dropdown-toggle"
                                data-toggle="dropdown" aria-expanded="false">
                                <span class="btn-text"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-back" viewBox="0 0 16 16">
                                        <path
                                            d="M0 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v2h2a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2v-2H2a2 2 0 0 1-2-2V2zm2-1a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H2z" />
                                    </svg> {{ $tahunini }}</span>
                            </a>
                            <div class="dropdown-menu">
                                <div class="col-md-auto">
                                    <a
                                        href="/example/{{ Auth::user()->ID_Pemilik }}/{{ $av }}/{{ $year }}">{{ $year }}</a>
                                </div>
                                @foreach ($ab1 as $a)
                                    <div class="col-md-auto">
                                        <a
                                            href="/example/{{ Auth::user()->ID_Pemilik }}/{{ $av }}/{{ $a }}">{{ $a }}</a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>


                    <div class="modal fade" id="question" data-backdrop="static" data-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Step by Step</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="container">
                        <p>
                            1. Add Cabang
                        </p>
                        <p>
                            2. Add Pegawai
                        </p>
                        <p>
                            3. Add Kamar
                        </p>
                        <p>
                            4. Add Transaksi
                        </p>
                        <p>
                            5. Add Pengeluaran
                        </p>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

                    <div class="text-right mt-3 mb-3 d-fixed">
                        <a class="btn btn-outline-warning mr-2">
                            <span class="btn-text" data-toggle="modal" data-target="#view">View Data</span>
                        </a>
                        <a class="btn btn-outline-warning mr-2">
                            <span class="btn-text" data-toggle="modal" data-target="#add">Add Data</span>
                        </a>
                        <a href="/visual/{{ Auth::user()->ID_Pemilik }}" class="btn btn-outline-warning mr-2">
                            <span class="btn-text">Back</span>
                        </a>
                    </div>

                    <div class="row mt-4">
                        <div class="col-md-5">
                            <div class="box shadow mt-4">

                                <div id="chart"></div>

                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="box shadow mt-4">
                                <div id="line-adwords" class=""></div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-md-12">
                            <div class="box shadow mt-4">
                                <div id="areachart"></div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-md-5">
                            <div class="box shadow mt-4">
                                <div id="barchart"></div>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="box shadow mt-4">
                                <table class="table table-dark table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Peran</th>
                                            <th scope="col">Gaji</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($pegawai as $p)
                                            <tr>
                                                <td>{{ $p->ID_Pegawai }}</td>
                                                <td>{{ $p->NamaPegawai }}</td>
                                                <td>{{ $p->Peran }}</td>
                                                <td>@currency( $p->Gaji )</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <p class="text-white">Total Gaji Pegawai:
                                <h3 class="text2 text-white">RP.{{ $totalGaji }}</h3>
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        </div>

        <script>
            window.Apex = {
                chart: {
                    foreColor: '#ccc',
                    toolbar: {
                        show: true
                    },
                },
                stroke: {
                    width: 3
                },
                dataLabels: {
                    enabled: false
                },
                tooltip: {
                    theme: 'dark'
                },
                grid: {
                    borderColor: "#535A6C",
                    xaxis: {
                        lines: {
                            show: true
                        }
                    }
                }
            };

            var optionsLine = {
                series: [{
                    name: 'WIFI',
                    data: {!! json_encode($WIFI) !!},
                }, {
                    name: 'Listrik',
                    data: {!! json_encode($Listrik) !!},
                }, {
                    name: 'Pemeliharaan',
                    data: {!! json_encode($Pemeliharaan) !!},
                }, ],
                chart: {
                    type: 'bar',
                    height: 350,
                    stacked: true,
                    stackType: '100%'
                },
                plotOptions: {
                    bar: {
                        horizontal: true,
                    },
                },
                stroke: {
                    width: 1,
                    colors: ['#fff']
                },
                dataLabels: {
                    enabled: true,
                },
                title: {
                    text: 'Total Pengeluaran = RP.{!! $Pengeluaran1 !!}',
                },
                xaxis: {
                    categories: {!! json_encode($Bulan) !!},
                },
                tooltip: {
                    y: {
                        formatter: function(val) {
                            return val + "K"
                        }
                    }
                },
                fill: {
                    opacity: 1

                },
                legend: {
                    position: 'top',
                    horizontalAlign: 'left',
                    offsetX: 40
                }
            };

            var chartLine = new ApexCharts(document.querySelector('#line-adwords'), optionsLine);
            chartLine.render();

            var options = {
                series: {!! json_encode($Laba) !!},
                labels: {!! json_encode($BulanLaba) !!},
                chart: {
                    width: 491,
                    height: 380,
                    type: 'donut',
                },
                plotOptions: {
                    pie: {
                        startAngle: -90,
                        endAngle: 270,
                        // size: 50
                    }
                },
                dataLabels: {
                    enabled: true,
                },
                fill: {
                    type: 'gradient',
                },
                title: {
                    text: 'Total Laba Bersih = RP.{!! $TotalLaba !!}'
                },
                responsive: [{
                    breakpoint: 480,
                    options: {
                        chart: {
                            width: '30%'
                        },
                        legend: {
                            position: 'bottom'
                        }
                    }
                }]
            };

            var chart = new ApexCharts(document.querySelector("#chart"), options);
            chart.render();

            var optionsBar = {
                chart: {
                    height: 380,
                    type: 'bar',
                    stacked: true,
                },
                plotOptions: {
                    bar: {
                        columnWidth: '30%',
                        horizontal: false,
                    },
                },
                series: [{
                    name: 'Terjual',
                    data: {!! json_encode($value) !!},
                }],
                xaxis: {
                    categories: {!! json_encode($key) !!},
                },
                fill: {
                    opacity: 1
                },

            }

            var chartBar = new ApexCharts(
                document.querySelector("#barchart"),
                optionsBar
            );

            chartBar.render();

            var optionsArea = {
                series: [{
                    name: 'Jumlah Transaksi',
                    data: {!! json_encode($countbulan) !!},
                }],
                chart: {
                    height: 350,
                    type: 'area'
                },
                dataLabels: {
                    enabled: false
                },
                stroke: {
                    curve: 'smooth'
                },
                xaxis: {
                    categories: {!! json_encode($bulanTransaksi) !!},
                },
                title: {
                    text: 'Total ada {!! $r !!} Transaksi dalam tahun {{ $ta }}'
                },
                tooltip: {
                    x: {
                        format: 'dd/MM/yy HH:mm'
                    },
                },
            };

            var chartArea = new ApexCharts(document.querySelector("#areachart"), optionsArea);
            chartArea.render();
        </script>

        {{-- edit --}}
        <div class="modal fade" id="view" data-backdrop="static" data-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">What want to View</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <div class="container b">
                            <div class="row">
                                <div class="col">
                                    <a class="btn btn-outline-warning mr-2 shadow">
                                        <span class="btn-text-warning " data-toggle="modal" data-target="#editpegawai">View
                                            Pegawai</span>
                                    </a>
                                </div>
                                <div class="col">
                                    <a class="btn btn-outline-warning shadow" href="#">
                                        <span class="btn-text-warning" data-toggle="modal" data-target="#edittransaksi">View
                                            Transaksi</span>
                                    </a>
                                </div>
                                <div class="w-100"></div>
                                <div class="col">
                                    <a class="btn btn-outline-warning shadow" href="#">
                                        <span class="btn-text-warning" data-toggle="modal" data-target="#editspend">View
                                            Pengeluaran</span>
                                    </a>
                                </div>
                                <div class="col">
                                    <a class="btn btn-outline-warning shadow" href="#">
                                        <span class="btn-text-warning" data-toggle="modal" data-target="#editCustomer">View
                                            Kamar</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="editpegawai" data-backdrop="static" data-keyboard="false"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">View/Edit</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <table class="table table-bordered border-primar">
                            <thead class="table-dark">
                                <tr>
                                    <th>No</th>
                                    <th>Nama Pegawai</th>
                                    <th>Peran</th>
                                    <th>Alamat</th>
                                    <th>Gaji</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="1col">
                                @foreach ($pegawai as $b)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $b->NamaPegawai }}</td>
                                        <td>{{ $b->Peran }}</td>
                                        <td>{{ $b->Alamat }}</td>
                                        <td>{{ $b->Gaji }}</td>
                                        <td>
                                            <a type="button"
                                                href="/editPegawai/{{ $b->ID_Pegawai }}/{{ $av }}/{{ $ta }}"
                                                class="btn btn-primary btn-sm">Edit</a>

                                            <form action="/deletePegawai/{{ $b->ID_Pegawai }}" method="post"
                                                onsubmit="return confirm('Are you sure to delete this?')">
                                                @method('delete')
                                                @csrf
                                                <button class="btn btn-danger btn-sm ">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

 {{-- datatable --}}
        <link rel="stylesheet" href=
        "https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css" />

             <!-- jQuery library file -->
             <script type="text/javascript"
             src="https://code.jquery.com/jquery-3.5.1.js">
             </script>

              <!-- Datatable plugin JS library file -->
             <script type="text/javascript" src=
        "https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js">
             </script>
              {{-- datatable --}}



        <div class="modal fade" id="edittransaksi" data-backdrop="static" data-keyboard="false"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">View/Edit</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <table id="tableID" class="display table table-bordered border-primar">
                            <thead class="table-dark">
                                <tr>
                                    <th>No</th>
                                    <th>Tanggal Masuk</th>
                                    <th>Kamar</th>
                                    <th>Nama Pelanggan</th>
                                    {{-- <th>Notelp</th> --}}
                                    <th>LamaSewa</th>
                                    <th>Tanggal Keluar</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="1col">
                                @foreach ($transaksi1 as $b)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $b->Tanggal }}</td>
                                        <td>{{ $b->TipeKamar }}</td>
                                        <td>{{ $b->NamaPelanggan }}</td>
                                        {{-- <td>{{ $b->Notelp }}</td> --}}
                                        <td>{{ $b->LamaSewa }}</td>
                                        <td>{{ $b->TanggalKeluar }}</td>
                                        <td>{{ $b->Status }}</td>
                                        <td>
                                            <a type="button"
                                                href="/editTransaksi/{{ $b->ID_Transaksi }}/{{ $av }}/{{ $ta }}"
                                                class="btn btn-primary btn-sm">Edit</a>

                                            <form action="/deleteTransaksi/{{ $b->ID_Transaksi }}" method="post"
                                                onsubmit="return confirm('Are you sure to delete this?')">
                                                @method('delete')
                                                @csrf
                                                <button class="btn btn-danger btn-sm ">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>

                    </div>
                    <div class="modal-footer">
                        {{-- <div width=100> {{ $transaksi1->links('pagination::bootstrap-4') }}</div> --}}
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <script>
            /* Initialization of datatable */
            $(document).ready(function() {
                $('#tableID').DataTable({ });
            });
        </script>

        <div class="modal fade" id="editspend" data-backdrop="static" data-keyboard="false"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">View/Edit</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <table id="tableID2" class="table table-bordered border-primar">
                            <thead class="table-dark">
                                <tr>
                                    <th>No</th>
                                    <th>Tanggal</th>
                                    <th>WIFI</th>
                                    <th>Listrik</th>
                                    <th>Pemeliharaan</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="1col">
                                @foreach ($faslitas as $b)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $b->Tanggal }}</td>
                                        <td>{{ $b->WIFI }}</td>
                                        <td>{{ $b->Listrik }}</td>
                                        <td>{{ $b->Pemeliharaan }}</td>
                                        <td>
                                            <a type="button"
                                                href="/editFasilitas/{{ $b->ID_Fasilitas }}/{{ $av }}/{{ $ta }}"
                                                class="btn btn-primary btn-sm">Edit</a>

                                            <form action="/deleteFasilitas/{{ $b->ID_Fasilitas }}" method="post"
                                                onsubmit="return confirm('Are you sure to delete this?')">
                                                @method('delete')
                                                @csrf
                                                <button class="btn btn-danger btn-sm ">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <script>
            /* Initialization of datatable */
            $(document).ready(function() {
                $('#tableID2').DataTable({ });
            });
        </script>


        <div class="modal fade" id="editCustomer" data-backdrop="static" data-keyboard="false"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">View/Edit</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <table class="table table-bordered border-primar">
                            <thead class="table-dark">
                                <tr>
                                    <th>No</th>
                                    <th>Tipe Kamar</th>
                                    <th>Total Kamar</th>
                                    <th>Harga Kamar</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody id="1col">
                                @foreach ($kamar as $b)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $b->TipeKamar }}</td>
                                        <td>{{ $b->JumlahKamar }}</td>
                                        <td>{{ $b->BiayaKamar }}</td>
                                        <td>
                                            <a type="button"
                                                href="/editKamar/{{ $b->ID_Kamar }}/{{ $av }}/{{ $ta }}"
                                                class="btn btn-primary btn-sm">Edit</a>

                                            <form action="/deleteKamar/{{ $b->ID_Kamar }}" method="post"
                                                onsubmit="return confirm('Are you sure to delete this?')">
                                                @method('delete')
                                                @csrf
                                                <button class="btn btn-danger btn-sm ">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        {{-- add --}}
        <div class="modal fade" id="add" data-backdrop="static" data-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">What want to add</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <div class="container b">
                            <div class="row">
                                <div class="col">
                                    <a class="btn btn-outline-warning mr-2 shadow">
                                        <span class="btn-text-warning " data-toggle="modal" data-target="#employee">Add
                                            Pegawai</span>
                                    </a>
                                </div>
                                <div class="col">
                                    <a class="btn btn-outline-warning shadow" href="#">
                                        <span class="btn-text-warning" data-toggle="modal" data-target="#transaction">Add
                                            Transaksi</span>
                                    </a>
                                </div>
                                <div class="w-100"></div>
                                <div class="col">
                                    <a class="btn btn-outline-warning shadow" href="#">
                                        <span class="btn-text-warning" data-toggle="modal" data-target="#spending">Add
                                            Pengeluaran</span>
                                    </a>
                                </div>
                                <div class="col">
                                    <a class="btn btn-outline-warning shadow" href="#">
                                        <span class="btn-text-warning" data-toggle="modal" data-target="#room">Add
                                            Kamar</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        {{-- 2 --}}
        <div class="modal fade" id="employee" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Add Pegawai</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        @if (Session::has('success'))
                            <div class="alert alert-success">
                                {{ Session::get('success') }}
                            </div>
                        @endif
                        <form id="validate" action="/addData2/{{ $av }}" method="POST"
                            onsubmit="return confirm('Are you sure want to add this?')">
                            {{ csrf_field() }}
                            <table id="emptbl" class="table table-bordered border-primar">
                                <thead class="table-dark">
                                    <tr>
                                        <th>Nama Pegawai</th>
                                        <th>Peran</th>
                                        <th>Gaji</th>
                                        <th>Alamat</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody id="employee11">
                                    <tr>
                                        <td><input type="text" class="form-control" name="NamaPegawai[]"
                                                placeholder="Enter nama pegawai"
                                                @error('NamaPegawai[]') is-invalid @enderror
                                                value="{{ old('NamaPegawai[]') }}" required>
                                            @error('NamaPegawai[]')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </td>
                                        {{-- <td><input type="text" class="form-control" name="Peran[]" placeholder="Enter peran" required></td> --}}
                                        <td>
                                            <select class="form-control" name="Peran[]" required>
                                                <option selected disabled>-- Select --</option>
                                                <option value="Satpam">Satpam</option>
                                                <option value="Cleaning Service">Cleaning Service</option>
                                            </select>
                                        </td>
                                        <td><input type="text" class="form-control" name="Gaji[]"
                                                placeholder="Enter gaji" @error('Gaji[]') is-invalid @enderror
                                                value="{{ old('Gaji[]') }}" pattern="^\d{1,3}(,\d{3})*(\.\d+)?$" value="" data-type="currency" required>
                                            @error('Gaji[]')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </td>
                                        <td><input type="text" class="form-control" name="Alamat[]"
                                                placeholder="Enter alamat" @error('Alamat[]') is-invalid @enderror
                                                value="{{ old('Alamat[]') }}" required>
                                            @error('Alamat[]')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </td>
                                        <td><button type="button" id="addRow" class="btn btn-sm btn-success">Add</button></td>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="" value="Submit" class="btn btn-primary">Submit</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>

        {{-- 3 --}}
        <div class="modal fade" id="transaction" data-backdrop="static" data-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Add Transaksi</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        @if (Session::has('success'))
                            <div class="alert alert-success">
                                {{ Session::get('success') }}
                            </div>
                        @endif
                        <form id="validate" action="/addTran/{{ $av }}" method="POST"
                            onsubmit="return confirm('Are you sure want to add this?')">
                            {{ csrf_field() }}
                            <table id="emptbl" class="table table-bordered border-primar">
                                <thead class="table-dark">
                                    <tr>
                                        <th>Tipe Kamar</th>
                                        <th>Nama Pelanggan</th>
                                        <th>Tanggal</th>
                                        <th>NoTelp</th>
                                        <th>Lama Sewa</th>
                                        {{-- <th>Total Customer Pay</th> --}}
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody id="tran11">
                                </td>
                                    <tr>
                                        <td>
                                            <select class="form-control" name="Tipe[]" required>
                                                <option selected disabled>-- Select --</option>
                                                @foreach ($kamar as $b)
                                                    <option value="{{ $b->ID_Kamar }}">{{ $b->TipeKamar }}</option>
                                                    {{-- <option type="hidden" value="{{ $b->BiayaKamar}}"></option> --}}
                                                @endforeach
                                            </select>
                                        </td>
                                        <td><input type="text" class="form-control" name="Nama[]"
                                                placeholder="Enter nama pelanggan" required></td>
                                        <td><input type="date" class="form-control" name="Date[]"
                                                placeholder="Enter tanggal masuk" required></td>
                                        <td><input type="number" class="form-control" name="Telp[]"
                                                placeholder="Enter nomor telepon"  @error('Telp[]') is-invalid @enderror
                                                value="{{ old('Telp[]') }}" required>
                                            @error('Telp[]')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </td>

                                        <td><input type="text" class="form-control" name="Long[]"
                                                placeholder="Enter lama sewa" required></td>
                                        {{-- <td><input type="text" class="form-control" name="Nominal[]" placeholder="Enter pembayaran pelanggan" required></td> --}}
                                        <td><button type="button" id="addRowTran" class="btn btn-sm btn-success">Add</button>
                                        </td>
                                    </tr>
                                    <p>*Lama sewa diisi dengan lama sewa yang customer sudah bayar</p>
                                    <p>*Kalau belum bayar isi dengan 0</p>
                                </tbody>
                            </table>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="" value="Submit" class="btn btn-primary">Submit</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>

        {{-- 4 --}}
        <div class="modal fade" id="spending" data-backdrop="static" data-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Add Pengeluaran</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        @if (Session::has('success'))
                            <div class="alert alert-success">
                                {{ Session::get('success') }}
                            </div>
                        @endif
                        <form id="validate" action="/addFasilitas/{{ $av }}" method="POST"
                            onsubmit="return confirm('Are you sure want to add this?')">
                            {{ csrf_field() }}
                            <table id="emptbl" class="table table-bordered border-primar">
                                <thead class="table-dark">
                                    <tr>
                                        <th>Tanggal</th>
                                        <th>WIFI</th>
                                        <th>Listrik</th>
                                        <th>Pemeliharaan</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody id="spending11">
                                    <tr>
                                        <td id="col2"><input type="date" class="form-control" name="Date[]"
                                                placeholder="Enter tanggal" required></td>
                                        <td id="col2"><input type="text" class="form-control" name="WIFI[]"
                                                placeholder="Rp."  pattern="^\d{1,3}(,\d{3})*(\.\d+)?$" value="" data-type="currency" required></td>
                                        <td id="col1"><input type="text" class="form-control" name="Electric[]"
                                                placeholder="Rp." pattern="^\d{1,3}(,\d{3})*(\.\d+)?$" value="" data-type="currency" required></td>
                                        <td id="col3"><input type="text" class="form-control" name="Maintanance[]"
                                                placeholder="Rp." pattern="^\d{1,3}(,\d{3})*(\.\d+)?$" value="" data-type="currency" required></td>
                                        <td><button type="button" id="addRowMain" class="btn btn-sm btn-success">Add</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="" value="Submit" class="btn btn-primary">Submit</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="modal fade" id="room" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Add Kamar</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        @if (Session::has('success'))
                            <div class="alert alert-success">
                                {{ Session::get('success') }}
                            </div>
                        @endif
                        <form id="validate" action="/addKamar/{{ $av }}" method="POST"
                            onsubmit="return confirm('Are you sure want to add this?')">
                            {{ csrf_field() }}
                            <table id="emptbl" class="table table-bordered border-primar">
                                <thead class="table-dark">
                                    <tr>
                                        <th>Tipe Kamar</th>
                                        <th>Total Kamar</th>
                                        <th>Harga Kamar</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody id="room11">
                                    <tr>
                                        <td><input type="text" class="form-control" name="TipeKamar[]"
                                                placeholder="Enter tipe kamar" required></td>
                                        <td><input type="text" class="form-control" name="JumlahKamar[]"
                                                placeholder="Enter jumlah kamar" required></td>
                                        <td><input type="text" class="form-control" name="BiayaKamar[]"
                                                placeholder="Enter biaya kamar" required></td>
                                        <td><button type="button" id="adddRoom" class="btn btn-sm btn-success">Add</button></td>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="" value="Submit" class="btn btn-primary">Submit</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>

    </body>

    <script type="text/javascript">

        $('#addRow').on('click', function() {
            var html = '';

                             html+='<tr>';
                                       html+='<td><input type="text" class="form-control" name="NamaPegawai[]" placeholder="Enter nama pegawai" @error('NamaPegawai[]') is-invalid @enderror value="{{ old('NamaPegawai[]') }}" required>';
                                           html+='@error('NamaPegawai[]')';
                                               html+='<span class="invalid-feedback" role="alert">';
                                                    html+='<strong>{{ $message }}</strong>';
                                                html+='</span>';
                                           html+=' @enderror';
                                       html+='</td>';
                                        html+='<td>';
                                            html+='<select class="form-control" name="Peran[]" required>';
                                               html+='<option selected disabled>-- Select --</option>';
                                               html+='<option value="Satpam">Satpam</option>';
                                               html+='<option value="Cleaning Service">Cleaning Service</option>';
                                           html+='</select>';
                                       html+='</td>';
                                       html+='<td><input type="number" class="form-control" name="Gaji[]" placeholder="Enter gaji" @error('Gaji[]') is-invalid @enderror value="{{ old('Gaji[]') }}" required>'
                                            html+='@error('Gaji[]')'
                                                html+='<span class="invalid-feedback" role="alert">'
                                                    html+='<strong>{{ $message }}</strong>'
                                                html+='</span>'
                                            html+='@enderror'
                                        html+='</td>'
                                        html+='<td><input type="text" class="form-control" name="Alamat[]" placeholder="Enter alamat" @error('Alamat[]') is-invalid @enderror value="{{ old('Alamat[]') }}" required>';
                                            html+='@error('Alamat[]')';
                                                html+='<span class="invalid-feedback" role="alert">';
                                                   html+='<strong>{{ $message }}</strong>';
                                               html+='</span>';
                                           html+='@enderror';
                                       html+='</td>';
                                       html +='<td><a href="#" id="remove" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i></a></td>';                                       html+='</td>';
                                   html+='</tr>';
            $('#employee11').append(html);
        });

        $('#addRowTran').on('click', function() {
                            var html = '';
                                        html+='<tr>';
                                        html+='<td>';
                                            html+='<select class="form-control" name="Tipe[]" required>';
                                                html+='<option selected disabled>-- Select --</option>';
                                                html+='@foreach ($kamar as $b) ';
                                                    html+='<option value="{{ $b->ID_Kamar }}">{{ $b->TipeKamar }}</option>';
                                                html+='@endforeach ';
                                            html+='</select>';
                                        html+='</td>';
                                        html+='<td><input type="text" class="form-control" name="Nama[]" placeholder="Enter nama pelanggan" required></td>';
                                        html+='<td><input type="date" class="form-control" name="Date[]" placeholder="Enter tanggal masuk" required></td>';
                                        html+='<td><input type="text" class="form-control" name="Telp[]" placeholder="Enter nomor telepon" required></td>';
                                        html+='<td><input type="text" class="form-control" name="Long[]" placeholder="Enter lama sewa" required></td>';
                                        html+='<td><a href="#" id="remove" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i></a></td>';                                       html+='</td>';
                                        html+='</td>';
                                    html+='</tr>';
            $('#tran11').append(html);
        });

        $('#addRowMain').on('click', function() {
            var html = '';

                                    html+='<tr>';
                                        html+='<td id="col2"><input type="date" class="form-control" name="Date[]" placeholder="Enter tanggal" required></td>';
                                        html+='<td id="col2"><input type="number" class="form-control" name="WIFI[]" placeholder="Rp." required></td>';
                                        html+='<td id="col1"><input type="number" class="form-control" name="Electric[]" placeholder="Rp." required></td>';
                                        html+='<td id="col3"><input type="number" class="form-control" name="Maintanance[]" placeholder="Rp." required></td>';
                                        html+='<td><a href="#" id="remove" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i></a></td>';                                       html+='</td>';
                                        html+='</td>';
                                   html+='</tr>';

            $('#spending11').append(html);
        });

        $('#adddRoom').on('click', function() {
            var html = '';

            html+='<tr>';
                html+='<td><input type="text" class="form-control" name="TipeKamar[]" placeholder="Enter tipe kamar" required></td>';
                html+='<td><input type="text" class="form-control" name="JumlahKamar[]" placeholder="Enter jumlah kamar" required></td>';
                html+='<td><input type="text" class="form-control" name="BiayaKamar[]" placeholder="Enter biaya kamar" required></td>';
                html+='<td><a href="#" id="remove" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i></a></td>';
                html+='</tr>';
                $('#room11').append(html);
        });

        $(document).on('click','#remove', function(){
            $(this).closest('tr').remove();
        });
    </script>


    {{-- <script>
    function addRows()
    {
        var table = document.getElementById('emptbl');
        var rowCount = table.rows.length;
        var cellCount = table.rows[0].cells.length;
        var row = table.insertRow(rowCount);
        for(var i =0; i <= cellCount; i++)
        {
            var cell = 'cell'+i;
            cell = row.insertCell(i);
            var copycel = document.getElementById('col'+i).innerHTML;
            cell.innerHTML=copycel;
            if(i == 3)
            {
                var radioinput = document.getElementById('col2').getElementsByTagName('input');
                for(var j = 0; j <= radioinput.length; j++)
                {
                    if(radioinput[j].type == 'radio')
                    {
                        var rownum = rowCount;
                        radioinput[j].name = 'gender['+rownum+']';
                    }
                }
            }
        }
    }

    function deleteRows()
    {
        var table = document.getElementById('emptbl');
        var rowCount = table.rows.length;
        if(rowCount > '2')
        {
            var row = table.deleteRow(rowCount-1);
            rowCount--;
        }else{
            alert('There should be atleast one row');
        }
    }
</script> --}}
@endsection
