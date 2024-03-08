@extends('layouts')

@section('content')
<div class="container-fluid">
    <h1>Data Kelas</h1>
    <a class="btn btn-info text-white mb-2" href="{{ route('siswa.index') }}">Kembali</a>
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
                    <a class="btn btn-success" href="{{ route('siswa.restore', $siswa->id) }}">Restore</a>
                    <a class="btn btn-danger" href="{{ route('siswa.delete', $siswa->id) }}">Delete</a>
                </td>
            </tr>
        @endforeach
    </table>
</div>
@endsection
