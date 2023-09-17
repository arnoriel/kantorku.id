@extends('layouts.admin')
  
@section('content')
            <div class="card" style="margin: 2%">
                <div class="card-header bg-primary text-white">Edit Data karyawan</div>
                <div class="card-body">
                    <a href="/karyawan" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm">
                        <i class="fas fa-arrow-left fa-sm text-white-50"></i> Kembali</a>
                    <form action="{{route('karyawan.update',$karyawan->id)}}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <br>
                            <label for="">Masukan Nama karyawan</label>
                            <input type="text" name="nama" value="{{$karyawan->nama}}" class="form-control @error('nama') is-invalid @enderror" placeholder="Masukkan Nama karyawan">
                            @error('nama')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <br>
                            <label for="">Masukan telepon</label>
                            <input type="number" name="telepon" value="{{$karyawan->telepon}}" class="form-control @error('telepon') is-invalid @enderror" placeholder="Masukkan telepon karyawan">
                            @error('telepon')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <br>
                                <label for="">Masukan Jenis Kelamin</label>
                                <br>
                                <select class="form-control" value="{{$karyawan->jk}}" aria-label="Default select example" name="jk" id="" >
                                    <option selected>Pilih Jenis Kelamin</option>
                                   <option>Laki-laki</option>
                                   <option>Perempuan</option>
                                </select>
                                <br>
                                <label for="">Masukan Alamat</label>
                            <input type="text" name="alamat" value="{{$karyawan->alamat}}" class="form-control @error('alamat') is-invalid @enderror" placeholder="Masukkan alamat karyawan">
                            @error('alamat')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <br>
                            <label for="">Masukan Tempat Tanggal Lahir</label>
                            <input type="text" name="ttl" value="{{$karyawan->ttl}}" class="form-control @error('ttl') is-invalid @enderror" placeholder="Masukkan ttl karyawan">
                            @error('ttl')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <br>
                        <center>
                        <div class="form-group">
                            <button type="reset" class="btn btn-warning text-white">Reset</button>
                            <button type="submit" class="btn btn-primary text-white">Simpan</button>
                        </div>
                    </center>
                    </form>
                </div>
            </div>
@endsection