@extends('template.master')

@section('page_content')
    <div class="container-sm m-0 p-0">
        <h1 class="mb-3">{{ empty($kelas) ? 'Tambah' : 'Edit' }} Siswa</h1>

        <form action="{{ url('siswa', @$siswa->id) }}" method="POST">
            @csrf

            @if (!empty($siswa))
                @method('PATCH')
            @endif

            <div class="form-floating mb-3">
                <input type="text" name="nis" value="{{ old('nis', @$siswa->nis) }}" class="form-control" id="nis"
                    placeholder=".">
                <label for="nis">NIS</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" name="nama_lengkap" value="{{ old('nama_lengkap', @$siswa->nama_lengkap) }}"
                    class="form-control" id="nama_lengkap" placeholder=".">
                <label for="nama_lengkap">Nama Lengkap</label>
            </div>

            <div class="mb-3 d-flex gap-2">
                <input type="radio" class="btn-check" id="jenkel-1" name="jenkel" value="L"
                    @if (old('jenkel', @$siswa->jenkel) == 'L') checked @endif>
                <label class="btn btn-outline-primary" for="jenkel-1">L</label><br>

                <input type="radio" class="btn-check" id="jenkel-2" name="jenkel" value="P"
                    @if (old('jenkel', @$siswa->jenkel) == 'P') checked @endif>
                <label class="btn btn-outline-primary" for="jenkel-2">P</label><br>
            </div>

            <div class="form-floating mb-3">
                <select class="form-select" id="goldar" name="goldar">
                    <option selected>-- Pilih --</option>
                    <option @if (old('goldar', @$siswa->goldar) == 'A') selected @endif value="A">A</option>
                    <option @if (old('goldar', @$siswa->goldar) == 'B') selected @endif value="B">B</option>
                    <option @if (old('goldar', @$siswa->goldar) == 'AB') selected @endif value="AB">AB</option>
                    <option @if (old('goldar', @$siswa->goldar) == 'O') selected @endif value="O">O</option>
                </select>
                <label for="goldar">Golongan Darah</label>
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
