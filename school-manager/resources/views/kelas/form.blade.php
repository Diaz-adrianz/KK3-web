@extends('template.master')

@section('page_content')
    <div class="container-sm m-0 p-0">
        <h1 class="mb-3">{{ empty($kelas) ? 'Tambah' : 'Edit' }} Kelas</h1>

        <form action="{{ url('kelas', @$kelas->id) }}" method="POST">
            @csrf

            @if (!empty($kelas))
                @method('PATCH')
            @endif

            <div class="form-floating mb-3">
                <input type="text" name="nama_kelas" value="{{ old('nama_kelas', @$kelas->nama_kelas) }}"
                    class="form-control" id="nama_kelas" placeholder=".">
                <label for="nama_kelas">Nama Kelas</label>
            </div>

            <div class="form-floating mb-3">
                <select class="form-select" id="jurusan" name="jurusan">
                    <option selected>-- Pilih --</option>
                    <option @if (old('jurusan', @$kelas->jurusan) == 'RPL') selected @endif value="RPL">RPL</option>
                    <option @if (old('jurusan', @$kelas->jurusan) == 'TJKT') selected @endif value="TJKT">TJKT</option>
                    <option @if (old('jurusan', @$kelas->jurusan) == 'DKV') selected @endif value="DKV">DKV</option>
                    <option @if (old('jurusan', @$kelas->jurusan) == 'TEAV') selected @endif value="TEAV">TEAV</option>
                    <option @if (old('jurusan', @$kelas->jurusan) == 'TITL') selected @endif value="TITL">TITL</option>
                    <option @if (old('jurusan', @$kelas->jurusan) == 'TOI') selected @endif value="TOI">TOI</option>
                </select>
                <label for="jurusan">Jurusan</label>
            </div>

            <div class="form-floating mb-3">
                <input type="text" name="lokasi_ruangan" value="{{ old('lokasi_ruangan', @$kelas->lokasi_ruangan) }}"
                    class="form-control" id="lokasi_ruangan" placeholder=".">
                <label for="lokasi_ruangan">Lokasi Ruangan</label>
            </div>

            <div class="form-floating mb-3">
                <input type="text" name="nama_wali_kelas" value="{{ old('nama_wali_kelas', @$kelas->nama_wali_kelas) }}"
                    class="form-control" id="nama_wali_kelas" placeholder=".">
                <label for="nama_wali_kelas">Nama Wali Kelas</label>
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
