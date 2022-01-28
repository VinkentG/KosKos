@extends('layouts.app')

@section('content')

<div class="container">
<form class="row g-3" method="POST" action="/editTransaksi/{{ $id }}" enctype="multipart/form-data" onsubmit="return confirm('Are you sure want to add this?')">
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
                <th>Date</th>
                <th>Room Type</th>
                <th>Customer Name</th>
                <th>Long Rent</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody id="1col">
        <tr>
            @foreach ($transaksi as $a)
            <td>{{ $a->Tanggal }}</td>
            <td>{{ $a->TipeKamar }}</td>
            <td><input id="col1" type="text" name="NamaPelanggan" value="{{ $a->NamaPelanggan }}" class="form-control name_list" /></td>
            <td><input id="col1" type="text" name="LamaSewa" value="{{ $a->LamaSewa }}" class="form-control name_list" /></td>
            @error('LamaSewa')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
            <td>
            <select class="form-control" name="Status">
                <option selected disabled value="{{ $a->Status }}">--</option>
                <option value="Lunas">Lunas</option>
                <option value="Belum Lunas">Belum Lunas</option>
            </select>
        </td>
            @endforeach
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
