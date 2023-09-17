@extends('layouts.anggota')

@section('content')
    <div class="card">
        <div class="card-body">
            <center>
            <a href="{{route('jadwal.create')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                <i class="fas fa-plus fa-sm text-white-50"></i> Masukkan Absensi</a>
            </center>
            </div>
    </div>
    <br>
    <div class="card">
        <div class="card-body">
            <strong>Catatan saat memasukkan Absensi dan Presensi !</strong>
            <br>
            <br>
            <p>- Mengisi formulir Absensi dan Presensi dengan Tepat.</p>
            <p>- Jika jam Masuk, jam Piket, dan jam Pulang diisi dengan waktu yang ditentukan, maka saat Masuk, Piket, dan Pulang harus sesuai dengan waktu yang ditentukan.</p>
            <p>- Setelah mengisi formulir Absensi dan Presensi silahkan segera Log Out.</p>
        </div>
    </div>
@endsection