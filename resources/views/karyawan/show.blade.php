@extends('layouts.admin')

@section('content')
<div class="card" style="margin: 3%">
    <div class="card-header bg-success text-white">Informasi Karyawan</div>
    <div class="card-body">
        <div class="form-group">
            <label for=""><h5>Nama Karyawan</h5></label>
            <input type="text" name="nama" value="{{$karyawan->nama}}" class="form-control" readonly>
            <br>
            <label for=""><h5>No. Telepon</h5></label>
            <input type="text" name="telepon" value="{{$karyawan->telepon}}" class="form-control" readonly>
            <br>
            <label for=""><h5>Jenis Kelamin</h5></label>
            <input type="text" name="jk" value="{{$karyawan->jk}}" class="form-control" readonly>
            <br>
            <label for=""><h5>Alamat</h5></label>
            <input type="text" name="alamat" value="{{$karyawan->alamat}}" class="form-control" readonly>
            <br>
            <label for=""><h5>Tempat Tanggal Lahir</h5></label>
            <input type="text" name="ttl" value="{{$karyawan->ttl}}" class="form-control" readonly>
        </div>
        <div class="form-group">
            <br>
            <a href="{{url('/karyawan')}}" class="btn btn-block btn-primary">Kembali</a>
        </div>
    </div>
</div>
@endsection