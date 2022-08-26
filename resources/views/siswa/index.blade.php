@extends('layout.template')

@section('title','Halaman siswa')

@section('content')
<section class="content">

    <!-- Default box -->
    <div class="card">
        <div class="card-body">
            <div class="container mt-3">
                <div class="row">
                    <div class="col-12">
                        <div class="py-4">
                            <h2>Tabel Siswa</h2>
                        </div>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nis</th>
                                    <th>Nama Siswa</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Jurusan</th>
                                    <th>Alamat</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($siswa as $sw)
                                <tr>
                                    <th>{{ $loop->iteration }}</th>
                                    <th><a href="{{ url('/siswa/'.$sw->id) }}">{{ $sw->nis }}</a></th>
                                    <th>{{ $sw->nama }}</th>
                                    <th>{{ $sw->jenis_kelamin }}</th>
                                    <th>{{ $sw->jurusan }}</th>
                                    <th>{{ $sw->alamat }}</th>
                                </tr>
                                @empty
                                <td colspan="6" class="text-center">Data Tidak Ditemui</td>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->

</section>
@endsection