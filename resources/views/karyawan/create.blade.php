@extends('layouts.admin')
  
@section('content')
            <div class="card" style="margin: 2%">
                <div class="card-header bg-primary text-white">Tambah Data karyawan</div>
                <div class="card-body">
                    <a href="/karyawan" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm">
                        <i class="fas fa-arrow-left fa-sm text-white-50"></i> Kembali</a>
                    <form action="{{route('karyawan.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                                <br>
                            <label for="">Masukan Nama karyawan</label>
                            <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" placeholder="Masukkan Nama Karyawan">
                            @error('nama')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <br>
                            <label for="">Masukan No. Telepon</label>
                            <input type="number" name="telepon" class="form-control @error('telepon') is-invalid @enderror" placeholder="Masukkan No. Telepon Karyawan">
                            @error('telepon')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <br>
                                <label for="">Masukan Jenis Kelamin</label>
                                <br>
                                <select class="form-control" aria-label="Default select example" name="jk" id="" >
                                    <option selected>Pilih Jenis Kelamin</option>
                                   <option>Laki-laki</option>
                                   <option>Perempuan</option>
                                </select>
                                <br>
                                <label for="">Masukan Alamat</label>
                            <input type="text" name="alamat" class="form-control @error('alamat') is-invalid @enderror" placeholder="Masukkan Alamat Karyawan">
                            @error('alamat')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <br>
                            <label for="">Masukan Tempat Tanggal Lahir</label>
                            <input type="text" name="ttl" class="form-control @error('ttl') is-invalid @enderror" placeholder="(Tempat Lahir, XX-XX-XXXX)">
                            @error('ttl')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <br>
                        <center>
                        <div class="form-group">
                            <button type="reset" class="d-none d-sm-inline-block btn btn-sm btn-warning shadow-sm">
                                <i class="fas fa-window-restore fa-sm text-white-50"></i> Reset</button>
                            <button type="submit" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                                <i class="fas fa-check fa-sm text-white-50"></i> Simpan</button>
                        </div>
                    </center>
                    </form>
                </div>
            </div>
@endsection