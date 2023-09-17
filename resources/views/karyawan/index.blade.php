@extends('layouts.admin')

@section('content')
<div class="card shadow mb-4" style="margin: 1%;">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Karyawan</h6>
        <br>
        <a href="{{route('karyawan.create')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
            <i class="fas fa-plus fa-sm text-white-50"></i> Tambah Data Karyawan</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Telepon</th>
                        <th>Jenis Kelamin</th>
                        <th>Alamat</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Telepon</th>
                        <th>Jenis Kelamin</th>
                        <th>Alamat</th>
                        <th>Aksi</th>
                    </tr>
                </tfoot>
                <tbody>
                    @php $no=1 @endphp  
                    @foreach ($karyawan as $data)
                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{$data->nama}}</td>
                        <td>{{$data->telepon}}</td>
                        <td>{{$data->jk}}</td>
                        <td>{{$data->alamat}}</td>
                        <td>
                            <form action="{{route('karyawan.destroy',$data->id)}}" method="post">
                                @method('delete')
                                @csrf
                                <a href="{{route('karyawan.edit',$data->id)}}" class="btn btn-outline-info"><i class="fas fa-pen"></i></a>
                                <a href="{{route('karyawan.show',$data->id)}}" class="btn btn-outline-warning"><i class="fas fa-eye"></i></a>
                                <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Apakah anda yakin menghapus')"><i class="fas fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection