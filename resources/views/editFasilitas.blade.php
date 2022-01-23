@extends('layouts.app')

@section('content')

<div class="container">
<form class="row g-3" method="POST" action="/editFasilitas/{{ $id }}" enctype="multipart/form-data" onsubmit="return confirm('Are you sure want to add this?')">
   {{-- @method('POST') --}}
   @if(Session::has('success'))
   <div class="alert alert-success">
       {{Session::get('success')}}
   </div>
   @endif
    @csrf
      <table class="table table-bordered border-primar table-sm" id="dynamic_field">
        <thead class="table-dark">
            <tr>
                <th>Tanggal</th>
                <th>WIFI</th>
                <th>Electric</th>
                <th>Maintanance</th>>
            </tr>
        </thead>
        <tbody id="1col">
        <tr>
            <td>{{ $tanggal }}</td>
            <td>Rp. <input id="col0" type="text" name="WIFI" placeholder="Masukan nama pegawai baru" class="form-control name_list" /></td>
            <td>Rp. <input id="col1" type="text" name="Listrik" placeholder="Masukan alamat baru" class="form-control name_list" /></td>
            <td>Rp. <input id="col1" type="text" name="Pemeliharaan" placeholder="Masukan gaji baru" class="form-control name_list" /></td>
        </tr>
        <td><a
            href="/example/{{ Auth::user()->ID_Pemilik }}/{{ $idp }}/{{ $ids }}"
            class="btn btn-outline-warning btn-danger mr-2">
            <span class="btn-text">Back</span> </a>
            <button type="submit" class="btn btn-primary">Submit</button>  </td>
    </tbody>
    </table>
</div>
</form>
</div>
@endsection
