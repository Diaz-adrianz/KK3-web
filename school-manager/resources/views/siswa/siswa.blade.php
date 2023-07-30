@extends('template.master')


@section('page_content')
    <a href="{{ url('/siswa/create') }}" class="btn mb-3 btn-primary">
        <i class="ri-add-line"></i>
        Tambah
    </a>

    <div class="table-responsive">
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Aksi</th>
                    <th scope="col">Nama Lengkap
                        <a href="?order_by=nama_lengkap&sort=asc" class="">
                            <i class="ri-arrow-down-double-line btn btn-outline-primary p-0 border-0"></i>
                        </a>
                        <a href="?order_by=nama_lengkap&sort=desc" class="">
                            <i class="ri-arrow-up-double-line btn btn-outline-primary p-0 border-0"></i>
                        </a>
                    </th>
                    <th scope="col">Jenis Kelamin
                        <a href="?order_by=jenkel&sort=asc" class="">
                            <i class="ri-arrow-down-double-line btn btn-outline-primary p-0 border-0"></i>
                        </a>
                        <a href="?order_by=jenkel&sort=desc" class="">
                            <i class="ri-arrow-up-double-line btn btn-outline-primary p-0 border-0"></i>
                        </a>
                    </th>
                    <th scope="col">Golongan Darah
                        <a href="?order_by=goldar&sort=asc" class="">
                            <i class="ri-arrow-down-double-line btn btn-outline-primary p-0 border-0"></i>
                        </a>
                        <a href="?order_by=goldar&sort=desc" class="">
                            <i class="ri-arrow-up-double-line btn btn-outline-primary p-0 border-0"></i>
                        </a>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($siswa as $s)
                    <tr>
                        <th scope="row">{{ isset($i) ? ++$i : ($i = 1) }}</th>
                        <td class="d-flex gap-2">
                            <a href="{{ url('/siswa/' . $s->id . '/edit') }}"
                                class="btn btn-outline-primary px-1 py-0 border-0">
                                <i class="ri-edit-fill"></i>
                            </a>
                            <form action="{{ urL('/siswa', $s->id) }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-outline-danger px-1 py-0 border-0">
                                    <i class="ri-delete-bin-2-fill"></i>
                                </button>
                            </form>
                        </td>
                        <td>{{ $s->nama_lengkap }}</td>
                        <td>{{ $s->jenkel }}</td>
                        <td>{{ $s->goldar }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
