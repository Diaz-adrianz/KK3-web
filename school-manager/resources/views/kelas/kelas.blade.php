@extends('template.master')


@section('page_content')
    <form action="" method="GET" class="d-flex gap-2 mb-3 mx-0 p-0 container-sm">
        <input type="text" class="form-control" name="search" placeholder="cari...">
        <button class="btn btn-primary" type="submit"><i class="ri-search-line"></i></button>
    </form>

    <a href="{{ url('/kelas/create') }}" class="btn mb-3 btn-primary">
        <i class="ri-add-line"></i>
        Tambah
    </a>

    <div class="table-responsive">
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Aksi</th>
                    <th scope="col">Nama Kelas
                        <a href="?order_by=nama_kelas&sort=asc" class="">
                            <i class="ri-arrow-down-double-line btn btn-outline-primary p-0 border-0"></i>
                        </a>
                        <a href="?order_by=nama_kelas&sort=desc" class="">
                            <i class="ri-arrow-up-double-line btn btn-outline-primary p-0 border-0"></i>
                        </a>
                    </th>
                    <th scope="col">Jurusan
                        <a href="?order_by=jurusan&sort=asc" class="">
                            <i class="ri-arrow-down-double-line btn btn-outline-primary p-0 border-0"></i>
                        </a>
                        <a href="?order_by=jurusan&sort=desc" class="">
                            <i class="ri-arrow-up-double-line btn btn-outline-primary p-0 border-0"></i>
                        </a>
                    </th>
                    <th scope="col">Lokasi Ruangan
                        <a href="?order_by=lokasi_ruangan&sort=asc" class="">
                            <i class="ri-arrow-down-double-line btn btn-outline-primary p-0 border-0"></i>
                        </a>
                        <a href="?order_by=lokasi_ruangan&sort=desc" class="">
                            <i class="ri-arrow-up-double-line btn btn-outline-primary p-0 border-0"></i>
                        </a>
                    </th>
                    <th scope="col">Wali Kelas
                        <a href="?order_by=nama_wali_kelas&sort=asc" class="">
                            <i class="ri-arrow-down-double-line btn btn-outline-primary p-0 border-0"></i>
                        </a>
                        <a href="?order_by=nama_wali_kelas&sort=desc" class="">
                            <i class="ri-arrow-up-double-line btn btn-outline-primary p-0 border-0"></i>
                        </a>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kelas as $k)
                    <tr>
                        <th scope="row">{{ isset($i) ? ++$i : ($i = 1) }}</th>
                        <td class="d-flex gap-2">
                            <a href="{{ url('/kelas/' . $k->id . '/edit') }}"
                                class="btn btn-outline-primary px-1 py-0 border-0">
                                <i class="ri-edit-fill"></i>
                            </a>
                            <form action="{{ urL('/kelas', $k->id) }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-outline-danger px-1 py-0 border-0">
                                    <i class="ri-delete-bin-2-fill"></i>
                                </button>
                            </form>
                        </td>
                        <td>{{ $k->nama_kelas }}</td>
                        <td>{{ $k->jurusan }}</td>
                        <td>{{ $k->lokasi_ruangan }}</td>
                        <td>{{ $k->nama_wali_kelas }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
