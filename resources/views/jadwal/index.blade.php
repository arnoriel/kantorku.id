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
@endsection