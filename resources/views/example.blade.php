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

h1, h2, h3, h4, h5, h6, strong {
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
  background-image: linear-gradient( 135deg, #ABDCFF 10%, #0396FF 100%);
}

.sparkboxes .box2 {
  background-image: linear-gradient( 135deg, #2AFADF 10%, #4C83FF 100%);
}

.sparkboxes .box3 {
  background-image: linear-gradient( 135deg, #FFD3A5 10%, #FD6585 100%);
}

.sparkboxes .box4 {
  background-image: linear-gradient( 135deg, #EE9AE5 10%, #5961F9 100%);
}
.h1{
    color: white;
}
.text1{
    margin-left: auto;
}
.text2{
    font-weight: bold;
    /* color: red; */
}
.btn{
    margin-bottom: 10px;
}
.btn-text{
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



        <div  class="text-right mb-3 d-fixed">
            <div class="btn-group dropleft  btn-outline-warning mr-2 btn-lg">
                <a type="button" class="btn btn-secondary btn-outline-warning dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <span class="btn-text"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-back" viewBox="0 0 16 16">
                        <path d="M0 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v2h2a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2v-2H2a2 2 0 0 1-2-2V2zm2-1a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H2z"/>
                      </svg>  {{ $tahunini }}</span>
                </a>
                <div class="dropdown-menu">
                    <div class="col-md-auto">
                    <a href="/example/{{ Auth::user()->ID_Pemilik }}/{{ $av }}/{{ $year }}">{{ $year }}</a></div>
                    @foreach ($ab1 as $a)
                    <div class="col-md-auto">
                        <a href="/example/{{ Auth::user()->ID_Pemilik }}/{{ $av }}/{{ $a }}">{{ $a }}</a>
                      </div>
                    @endforeach
                </div>
              </div>
        </div>

         <div  class="text-right mt-3 mb-3 d-fixed">
            <a class="btn btn-outline-warning mr-2">
                <span class="btn-text" data-toggle="modal" data-target="#view">View Data</span>
              </a>
            <a class="btn btn-outline-warning mr-2">
                <span class="btn-text" data-toggle="modal" data-target="#add">Add Data</span>
              </a>
          <a
            href="/visual/{{ Auth::user()->ID_Pemilik }}"
            class="btn btn-outline-warning mr-2">
            <span class="btn-text">Back</span>
          </a>
          </div>


          {{-- <div class="main">
            <div class="row sparkboxes mt-4">
              <div class="col-md-3">
                <div class="box box1">
                  <div class="details">
                    <h3>1213</h3>
                    <h4>CLICKS</h4>
                  </div>
                  <div id="spark1"></div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="box box2">
                  <div class="details">
                    <h3>422</h3>
                    <h4>VIEWS</h4>
                  </div>
                  <div id="spark2"></div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="box box3">
                  <div class="details">
                    <h3>311</h3>
                    <h4>LEADS</h4>
                  </div>
                  <div id="spark3"></div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="box box4">
                  <div class="details">
                    <h3>22</h3>
                    <h4>SALES</h4>
                  </div>
                  <div id="spark4"></div>
                </div>
              </div>
            </div> --}}

            <div class="row mt-4">
              <div class="col-md-5">
                <div class="box shadow mt-4">

                    {{-- <div class="dis row-mt-1">
                    <h1>Laba Bersih </h1>
                        @if ($Laba == null || $Bulan == null || $Tahun == null)
                          <svg class="gambar" xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-plus-square-fill" viewBox="0 0 16 16">
                            <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3a.5.5 0 0 1 1 0z"/>
                          </svg>
                        @else
                        <a class="text1">Edit</a>
                        @endif
                    </div> --}}

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
                  <p class="text-white">Total Gaji Pegawai: <h3 class="text2 text-white">RP.{{ $totalGaji }}</h3></p>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>


    {{-- <script src="../../../../dist/apexcharts.js"></script> --}}

    <script>
        window.Apex = {
    chart: {
    foreColor: '#ccc',
    toolbar: {
      show: false
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

var spark1 = {
  chart: {
    id: 'spark1',
    group: 'sparks',
    type: 'line',
    height: 80,
    sparkline: {
      enabled: true
    },
    dropShadow: {
      enabled: true,
      top: 1,
      left: 1,
      blur: 2,
      opacity: 0.2,
    }
  },
  series: [{
    data: [25, 66, 41, 59, 25, 44, 12, 36, 9, 21]
  }],
  stroke: {
    curve: 'smooth'
  },
  markers: {
    size: 0
  },
  grid: {
    padding: {
      top: 20,
      bottom: 10,
      left: 110
    }
  },
  colors: ['#fff'],
  tooltip: {
    x: {
      show: false
    },
    y: {
      title: {
        formatter: function formatter(val) {
          return '';
        }
      }
    }
  }
}

var spark2 = {
  chart: {
    id: 'spark2',
    group: 'sparks',
    type: 'line',
    height: 80,
    sparkline: {
      enabled: true
    },
    dropShadow: {
      enabled: true,
      top: 1,
      left: 1,
      blur: 2,
      opacity: 0.2,
    }
  },
  series: [{
    data: [12, 14, 2, 47, 32, 44, 14, 55, 41, 69]
  }],
  stroke: {
    curve: 'smooth'
  },
  grid: {
    padding: {
      top: 20,
      bottom: 10,
      left: 110
    }
  },
  markers: {
    size: 0
  },
  colors: ['#fff'],
  tooltip: {
    x: {
      show: false
    },
    y: {
      title: {
        formatter: function formatter(val) {
          return '';
        }
      }
    }
  }
}

var spark3 = {
  chart: {
    id: 'spark3',
    group: 'sparks',
    type: 'line',
    height: 80,
    sparkline: {
      enabled: true
    },
    dropShadow: {
      enabled: true,
      top: 1,
      left: 1,
      blur: 2,
      opacity: 0.2,
    }
  },
  series: [{
    data: [47, 45, 74, 32, 56, 31, 44, 33, 45, 19]
  }],
  stroke: {
    curve: 'smooth'
  },
  markers: {
    size: 0
  },
  grid: {
    padding: {
      top: 20,
      bottom: 10,
      left: 110
    }
  },
  colors: ['#fff'],
  xaxis: {
    crosshairs: {
      width: 1
    },
  },
  tooltip: {
    x: {
      show: false
    },
    y: {
      title: {
        formatter: function formatter(val) {
          return '';
        }
      }
    }
  }
}

var spark4 = {
  chart: {
    id: 'spark4',
    group: 'sparks',
    type: 'line',
    height: 80,
    sparkline: {
      enabled: true
    },
    dropShadow: {
      enabled: true,
      top: 1,
      left: 1,
      blur: 2,
      opacity: 0.2,
    }
  },
  series: [{
    data: [15, 75, 47, 65, 14, 32, 19, 54, 44, 61]
  }],
  stroke: {
    curve: 'smooth'
  },
  markers: {
    size: 0
  },
  grid: {
    padding: {
      top: 20,
      bottom: 10,
      left: 110
    }
  },
  colors: ['#fff'],
  xaxis: {
    crosshairs: {
      width: 1
    },
  },
  tooltip: {
    x: {
      show: false
    },
    y: {
      title: {
        formatter: function formatter(val) {
          return '';
        }
      }
    }
  }
}

new ApexCharts(document.querySelector("#spark1"), spark1).render();
new ApexCharts(document.querySelector("#spark2"), spark2).render();
new ApexCharts(document.querySelector("#spark3"), spark3).render();
new ApexCharts(document.querySelector("#spark4"), spark4).render();

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
        },],
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
          text: 'Total Pengeluaran = RP.{!! ($Pengeluaran) !!}',
        },
        xaxis: {
          categories: {!! json_encode($Bulan) !!},
        },
        tooltip: {
          y: {
            formatter: function (val) {
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
          text: 'Total Laba Bersih = RP.{!! ($TotalLaba) !!}'
        },
        // legend: {
        //   formatter: function(val, opts) {
        //     return val + " - " + opts.w.globals.series[opts.seriesIndex]
        //   }
        // },
        // title: {
        //   text: 2019,
        // },
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
    data:  {!! json_encode($value) !!},
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
        // }, {
        //   name: 'series2',
        //   data: [11, 32, 45, 32, 34, 52, 41]
        // }, {
        //   name: 'series2',
        //   data: [11, 32, 45, 32, 34, 52, 41,12,44,45,45,45]
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
        //   type: 'datetime',
          categories: {!! json_encode($bulanTransaksi) !!},
        },
        title: {
          text: 'Total ada {!! ($r) !!} Transaksi dalam tahun {{ ($ta) }}'
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
<div class="modal fade" id="view" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
                    <span class="btn-text-warning " data-toggle="modal" data-target="#editpegawai">View Employee</span>
                    </a></div>
                  <div class="col">
                    <a class="btn btn-outline-warning shadow" href="#">
                        <span class="btn-text-warning" data-toggle="modal" data-target="#edittransaksi">View Transaction</span>
                        </a></div>
                  <div class="w-100"></div>
                  <div class="col">
                    <a class="btn btn-outline-warning shadow" href="#">
                        <span class="btn-text-warning" data-toggle="modal" data-target="#editspend">View Spending</span>
                    </a></div>
                        <div class="col">
                            <a class="btn btn-outline-warning shadow" href="#">
                                <span class="btn-text-warning" data-toggle="modal" data-target="#editCustomer">View Room</span>
                            </a></div>
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

<div class="modal fade" id="editpegawai" data-backdrop="static" data-keyboard="false" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
                            <th>Name Employee</th>
                            <th>Role</th>
                            <th>Adress</th>
                            <th>Sallary</th>
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
                            <a type="button" href="/editPegawai/{{$b->ID_Pegawai}}/{{ $av }}/{{ $ta }}" class="btn btn-primary btn-sm">Edit</a>

                            <form action="/deletePegawai/{{$b->ID_Pegawai}}" method="post" onsubmit="return confirm('Are you sure to delete this?')">
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

  <div class="modal fade" id="edittransaksi" data-backdrop="static" data-keyboard="false" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
                            <th>Tanggal Masuk</th>
                            <th>Kamar</th>
                            <th>Nama Pelanggan</th>
                            {{-- <th>Notelp</th> --}}
                            <th>LamaSewa</th>
                            <th>Tanggal  Keluar</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody id="1col">
                        @foreach ($transaksi1 as $b)
                        <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $b->Tanggal}}</td>
                        <td>{{ $b->TipeKamar}}</td>
                        <td>{{ $b->NamaPelanggan }}</td>
                        {{-- <td>{{ $b->Notelp }}</td> --}}
                        <td>{{ $b->LamaSewa }}</td>
                        <td>{{ $b->TanggalKeluar }}</td>
                        <td>{{ $b->Status }}</td>
                        <td>
                            <a type="button" href="/editTransaksi/{{$b->ID_Transaksi}}/{{ $av }}/{{ $ta }}" class="btn btn-primary btn-sm">Edit</a>

                            <form action="/deleteTransaksi/{{$b->ID_Transaksi}}" method="post" onsubmit="return confirm('Are you sure to delete this?')">
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
            <div width=100> {{$transaksi1->links('pagination::bootstrap-4')}}</div>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="editspend" data-backdrop="static" data-keyboard="false" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
                            <th>Date</th>
                            <th>WIFI</th>
                            <th>Electric</th>
                            <th>Maintanance</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody id="1col">
                        @foreach ($faslitas as $b)
                        <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $b->Tanggal}}</td>
                        <td>{{ $b->WIFI}}</td>
                        <td>{{ $b->Listrik }}</td>
                        <td>{{ $b->Pemeliharaan }}</td>
                        <td>
                            <a type="button" href="/editFasilitas/{{$b->ID_Fasilitas}}/{{ $av }}/{{ $ta }}" class="btn btn-primary btn-sm">Edit</a>

                            <form action="/deleteFasilitas/{{$b->ID_Fasilitas}}" method="post" onsubmit="return confirm('Are you sure to delete this?')">
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

  <div class="modal fade" id="editCustomer" data-backdrop="static" data-keyboard="false" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
                            <th>Room Type</th>
                            <th>Room Total</th>
                            <th>Room Price</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody id="1col">
                        @foreach ($kamar as $b)
                        <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $b->TipeKamar}}</td>
                        <td>{{ $b->JumlahKamar}}</td>
                        <td>{{ $b->BiayaKamar }}</td>
                        <td>
                            <a type="button" href="/editKamar/{{$b->ID_Kamar}}/{{ $av }}/{{ $ta }}" class="btn btn-primary btn-sm">Edit</a>

                            <form action="/deleteKamar/{{$b->ID_Kamar}}" method="post" onsubmit="return confirm('Are you sure to delete this?')">
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
 <div class="modal fade" id="add" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
                    <span class="btn-text-warning " data-toggle="modal" data-target="#employee">Add Employee</span>
                    </a></div>
                  <div class="col">
                    <a class="btn btn-outline-warning shadow" href="#">
                        <span class="btn-text-warning" data-toggle="modal" data-target="#transaction">Add Transaction</span>
                        </a></div>
                  <div class="w-100"></div>
                  <div class="col">
                    <a class="btn btn-outline-warning shadow" href="#">
                        <span class="btn-text-warning" data-toggle="modal" data-target="#spending">Add Spending</span>
                    </a></div>
                    <div class="col">
                    <a class="btn btn-outline-warning shadow" href="#">
                        <span class="btn-text-warning" data-toggle="modal" data-target="#room">Add Room</span>
                    </a></div>
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
   <div class="modal fade" id="employee" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Add Employee</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

              @if(Session::has('success'))
              <div class="alert alert-success">
                  {{Session::get('success')}}
              </div>
              @endif
              <form id="validate" action="/addData2/{{$av}}" method="POST" onsubmit="return confirm('Are you sure want to add this?')">
                {{csrf_field()}}
                <table id="emptbl" class="table table-bordered border-primar">
                    <thead class="table-dark">
                        <tr>
                            <th>Name Employee</th>
                            <th>Role</th>
                            <th>Sallary</th>
                            <th>Address</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="text" class="form-control" name="NamaPegawai[]" placeholder="Enter nama pegawai" @error('NamaPegawai[]') is-invalid @enderror value="{{ old('NamaPegawai[]') }}" required>
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
                            <td><input type="number" class="form-control" name="Gaji[]" placeholder="Enter gaji" @error('Gaji[]') is-invalid @enderror value="{{ old('Gaji[]') }}" required >
                            @error('Gaji[]')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </td>
                            <td><input type="text" class="form-control" name="Alamat[]" placeholder="Enter alamat" @error('Alamat[]') is-invalid @enderror value="{{ old('Alamat[]') }}" required>
                                @error('Alamat[]')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </td>
                                <td><button type="button" class="btn btn-sm btn-success addRow">Add</button></td>
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
<div class="modal fade" id="transaction" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Add Transaction</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

              @if(Session::has('success'))
              <div class="alert alert-success">
                  {{Session::get('success')}}
              </div>
              @endif
              <form id="validate" action="/addTran/{{ $av }}" method="POST" onsubmit="return confirm('Are you sure want to add this?')">
                {{csrf_field()}}
                <table id="emptbl" class="table table-bordered border-primar">
                    <thead class="table-dark">
                        <tr>
                            <th>Room Type</th>
                            <th>Name Customer</th>
                            <th>Date</th>
                            <th>NoTelp</th>
                            <th>Long Lease</th>
                            {{-- <th>Total Customer Pay</th> --}}
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
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
                            <td><input type="text" class="form-control" name="Nama[]" placeholder="Enter nama pelanggan" required></td>
                            <td><input type="date" class="form-control" name="Date[]" placeholder="Enter tanggal masuk" required></td>
                            <td><input type="text" class="form-control" name="Telp[]" placeholder="Enter nomor telepon" required></td>
                            <td><input type="text" class="form-control" name="Long[]" placeholder="Enter lama sewa" required></td>
                            {{-- <td><input type="text" class="form-control" name="Nominal[]" placeholder="Enter pembayaran pelanggan" required></td> --}}
                            <td><button type="button" class="btn btn-sm btn-success addRowTran">Add</button></td>
                        </tr>
                        <p>*Long lease diisi dengan lama sewa yang customer sudah bayar</p>
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
  <div class="modal fade" id="spending" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Add Spending</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

              @if(Session::has('success'))
              <div class="alert alert-success">
                  {{Session::get('success')}}
              </div>
              @endif
              <form id="validate" action="/addFasilitas/{{ $av }}" method="POST" onsubmit="return confirm('Are you sure want to add this?')">
                {{csrf_field()}}
                <table id="emptbl" class="table table-bordered border-primar">
                    <thead class="table-dark">
                        <tr>
                            <th>Date</th>
                            <th>WIFI</th>
                            <th>Electric</th>
                            <th>Maintanance</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody id="1col">
                        <tr>
                            <td id="col2"><input type="date" class="form-control" name="Date[]" placeholder="Enter tanggal" required></td>
                            <td id="col2"><input type="text" class="form-control" name="WIFI[]" placeholder="Rp." required></td>
                            <td id="col1"><input type="text" class="form-control" name="Electric[]" placeholder="Rp." required></td>
                            <td id="col3"><input type="text" class="form-control" name="Maintanance[]" placeholder="Rp." required></td>
                            <td><button type="button" class="btn btn-sm btn-success addRowMain">Add</button></td>
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

  <div class="modal fade" id="room" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Add Room</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

              @if(Session::has('success'))
              <div class="alert alert-success">
                  {{Session::get('success')}}
              </div>
              @endif
              <form id="validate" action="/addKamar/{{$av}}" method="POST" onsubmit="return confirm('Are you sure want to add this?')">
                {{csrf_field()}}
                <table id="emptbl" class="table table-bordered border-primar">
                    <thead class="table-dark">
                        <tr>
                            <th>RoomT Type</th>
                            <th>Total Room</th>
                            <th>Room Price</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="text" class="form-control" name="TipeKamar[]" placeholder="Enter tipe kamar" required></td>
                            <td><input type="text" class="form-control" name="JumlahKamar[]" placeholder="Enter jumlah kamar" required></td>
                            <td><input type="text" class="form-control" name="BiayaKamar[]" placeholder="Enter baiaya kamar" required></td>
                                <td><button type="button" class="btn btn-sm btn-success addRoom">Add</button></td>
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

<script>
 $('.addRow').on('click',function(){
        addRow();
    });
    function addRow()
    {
        var tr='<tr>'+
            '<td><input type="text" class="form-control" name="NamaPegawai[]" placeholder="Enter nama pegawai" required></td>'+
            // '<td><input type="tel" class="form-control" name="Peran[]" placeholder="Enter peran" required></td>'+
            '<td>'+
            '<select class="form-control" name="Peran[]" required>'+
                                '<option selected disabled>-- Select --</option>'+
                                '<option value="Satpam">Satpam</option>'+
                                '<option value="Cleaning Service">Cleaning Service</option>'+
                            '</select>'+
                            '</td>'+
            '<td><input type="text" class="form-control" name="Gaji[]" placeholder="Enter gaji" required></td>'+
            '<td><input type="text" class="form-control" name="Alamat[]" placeholder="Enter alamat" required></td>'+
            // '<td><button type="button" class="btn btn-sm btn-danger text-danger remove">Remove</button></td>'+
            '<td><a href="#" class="btn btn-danger remove"><i class="glyphicon glyphicon-remove"></i></a></td>'+
        '</tr>';
        $('tbody').append(tr);
    };
    // addTransaksi
    $('.addRowTran').on('click',function(){
        addRowTran();
    });
    function addRowTran()
    {
        var tr='<tr>'+
                            '<td id="col1">'+
                                '<select class="form-control" name="Tipe[]" id="dept" required>'+
                                    '<option selected disabled>-- Select --</option>'+
                                    '@foreach ($kamar as $b)'+
                                    '<option value="{{ $b->ID_Kamar }}">{{ $b->TipeKamar }}</option>'+
                                    '@endforeach'+
                                '</select>'+
                            '</td>'+
                            '<td id="col2"><input type="text" class="form-control" name="Nama[]" placeholder="Enter nama pelanggan" required></td>'+
                            '<td id="col1"><input type="date" class="form-control" name="Date[]" placeholder="Enter tanggal masuk" required></td>'+
                            '<td><input type="text" class="form-control" name="Telp[]" placeholder="Enter nomor telepon" required></td>'+
                            '<td id="col2"><input type="text" class="form-control" name="Long[]" placeholder="Enter lama sewa" required></td>'+
            '<td><a href="#" class="btn btn-danger remove"><i class="glyphicon glyphicon-remove"></i></a></td>'+
        '</tr>';
        $('tbody').append(tr);
    };
    // addmaintanence
    $('.addRowMain').on('click',function(){
        addRowMain();
    });
    function addRowMain()
    {
        var tr='<tr>'+
                            '<td id="col2"><input type="date" class="form-control" name="Date[]" placeholder="Enter tanggal" required></td>'+
                            '<td id="col2"><input type="text" class="form-control" name="WIFI[]" placeholder="Enter pengeluaran wifi" required></td>'+
                            '<td id="col1"><input type="text" class="form-control" name="Electric[]" placeholder="Enter pengeluaran listrik" required></td>'+
                            '<td id="col3"><input type="text" class="form-control" name="Maintanance[]" placeholder="Enter pengeluaran pemeliharaan" required></td>'+
            '<td><a href="#" class="btn btn-danger remove"><i class="glyphicon glyphicon-remove"></i></a></td>'+
        '</tr>';
        $('tbody').append(tr);
    };
    $('.addRoom').on('click',function(){
        addRoom();
    });
    function addRoom()
    {
        var tr='<tr>'+
           ' <td><input type="text" class="form-control" name="TipeKamar[]" placeholder="Enter tipe kamar" required></td>'+
                            '<td><input type="text" class="form-control" name="JumlahKamar[]" placeholder="Enter jumlah kamar" required></td>'+
                            '<td><input type="text" class="form-control" name="BiayaKamar[]" placeholder="Enter baiaya kamar" required></td>'+
            '<td><a href="#" class="btn btn-danger remove"><i class="glyphicon glyphicon-remove"></i></a></td>'+
        '</tr>';
        $('tbody').append(tr);
    };

    $('.remove').live('click',function(){
        var last=$('tbody tr').length;
        if(last==1){
            alert("you can not remove last row");
        }
        else{
             $(this).parent().parent().remove();
        }

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
