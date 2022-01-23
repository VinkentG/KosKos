@extends('layouts.app')

@section('content')

<div class="container">
<form class="row g-3" method="POST" action="/editPegawai/{{ $id }}" enctype="multipart/form-data" onsubmit="return confirm('Are you sure want to add this?')">
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
                <th>Name Employee</th>
                <th>Address</th>
                <th>Sallary</th>
                <th>Role</th>
            </tr>
        </thead>
        <tbody id="1col">
        <tr>
            <td><input id="col0" type="text" name="NamaPegawai" placeholder="Masukan nama pegawai baru" class="form-control name_list" /></td>
            <td><input id="col1" type="text" name="Alamat" placeholder="Masukan alamat baru" class="form-control name_list" /></td>
            <td><input id="col1" type="text" name="Gaji" placeholder="Masukan gaji baru" class="form-control name_list" /></td>
            <td><input id="col1" type="text" name="Peran" placeholder="Masukan peran baru" class="form-control name_list" /></td>

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
