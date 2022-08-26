@extends('layout.template')

@section('title','Home')

@section('content')
<section class="content">

    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Title</h3>
        </div>
        <div class="card-body">
            <div class="container mt-3">
                <div class="row">
                    <div class="col-12">
                        <div class="pt-3">
                            <h1 class="h2">Biodata {{ $siswa->nama }}</h1>
                        </div>
                        <ul>
                            <li>NIS : {{ $siswa->nis }}</li>
                            <li>Nama : {{ $siswa->nama }}</li>
                            <li>Jenis Kelamin : {{ $siswa->jenis_kelamin }}</li>
                            <li>Jurusan : {{ $siswa->jurusan }}</li>
                            <li>Alamat : {{ $siswa->alamat }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.card -->

</section>
@endsection