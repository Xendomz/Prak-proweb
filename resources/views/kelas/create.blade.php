@extends('layouts')

@section('content')
<div class="container">
    <h1>Form Kelas</h1>
    <form action="{{ route('kelas.store') }}" method="POST">
        @csrf
        <label for="">Nama Kelas</label>
        <input class="form-control" type="text" name="nama_kelas">
        @error('nama_kelas')
            <small class="text-danger">{{ $message }}</small><br>
        @enderror
        <button class="btn btn-success mt-2" type="submit">Simpan</button>
    </form>
</div>
@endsection
