@extends('layouts')

@section('content')
    <div class="container-fluid">
        <h1>Data Kelas</h1>
        <div class="mb-3">
            @if (auth()->user()->isAdmin)
                <a class="btn btn-success" href="{{ route('siswa.create') }}">Tambah Kelas+</a>
            @endif
            @if (auth()->user()->isUser)
                <a class="btn btn-warning" href="{{ route('siswa.trash') }}">History Data</a>
            @endif
        </div>
        <table class="table table-bordered">
            <tr>
                <td>No</td>
                <td>NIK </td>
                <td>Nama Siswa</td>
                <td>Alamat</td>
                <td>Kelas</td>
                <td>Action</td>
            </tr>
            @foreach ($siswas as $siswa)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $siswa->NIK }}</td>
                    <td>{{ $siswa->nama_siswa }}</td>
                    <td>{{ $siswa->alamat }}</td>
                    <td>{{ $siswa->kelas->nama_kelas }}</td>
                    <td>
                        <form action="{{ route('siswa.destroy', $siswa->id) }}" method="POST" class="form-inline">
                            @method('DELETE')
                            @csrf
                            <a class="btn btn-warning" href="{{ route('siswa.edit', $siswa->id) }}">Edit</a>
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
