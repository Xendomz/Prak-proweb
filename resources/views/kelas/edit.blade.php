@extends('layouts')

@section('content')
    <div class="container">
        <h1>Form Kelas</h1>
        <form action="{{ route('kelas.update', $kelas->id) }}" method="POST">
            @method('PUT')
            @csrf
            <label for="">Nama Kelas</label>
            <input class="form-control" type="text" name="nama_kelas" value="{{ $kelas->nama_kelas }}" required>
            <button class="btn btn-success mt-2" type="submit">Simpan</button>
        </form>
    </div>
@endsection
