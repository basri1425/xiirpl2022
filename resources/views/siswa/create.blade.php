@extends('layout.template')

@section('title','Tambah Siswa')

@section('content')
<section class="content">
    <!-- Default box -->
    <div class="card">
        <div class="card-body">
            <div class="container pt-4 bg-white">
                <div class="row">
                    <div class="col-8 col-xl-6">
                        <h1>Tambah Siswa</h1>
                    </div>
                </div>
                <div class="row">
                    <form action="{{ route('siswa.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="nis" class="form-label">NIS</label>
                            <input type="text" id="nis" name="nis" value="{{ old('nis') }}"
                                class="form-control @error('nis') is-invalid @enderror">
                            @error('nis')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Siswa</label>
                            <input type="text" id="nama" name="nama" value="{{ old('nama') }}"
                                class="form-control @error('nama') is-invalid @enderror">
                            @error('nama')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Jenis Kelamin</label>
                            <div class="d-flex">
                                <div class="form-check me-3 form-check-inline">
                                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki_laki"
                                        value="L" {{ old('jenis_kelamin')=='L' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="laki_laki">Laki-laki</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input form-check-inline" type="radio" name="jenis_kelamin"
                                        id="perempuan" value="P" {{ old('jenis_kelamin')=='P' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="perempuan">Perempuan</label>
                                </div>
                            </div>
                            @error('jenis_kelamin')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="jurusan">Jurusan</label>
                            <select class="form-select" name="jurusan" id="jurusan" value="{{ old('jurusan') }}">
                                <option value="Rekayasa Perangkat Lunak" {{ old('jurusan')=='Rekayasa Perangkat Lunak'
                                    ? 'selected' : '' }}>
                                    Rekayasa Perangkat Lunak
                                </option>
                                <option value="Bisnis Daring dan Pemasaran" {{
                                    old('jurusan')=='Bisnis Daring dan Pemasaran' ? 'selected' : '' }}>
                                    Bisnis Daring dan Pemasaran
                                </option>
                            </select>
                            @error('jurusan')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="alamat" class="form-labe">Alamat</label>
                            <textarea name="alamat" rows="3" class="form-control">{{ old('alamat') }}</textarea>
                        </div>

                        <button type="submit" class="btn btn-primary mb-2">Tambah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /.card -->
</section>
@endsection