@extends('layouts')

@section('content')
<div class="container">
    <h1>Form Siswa</h1>
    <form action="{{ route('siswa.store') }}" method="POST">
        @csrf
        <label for="">NIK</label>
        <input class="form-control" type="text" name="nik" required>
        <label for="">Nama siswa</label>
        <input class="form-control" type="text" name="nama_siswa" required>
        <label for="">Alamat</label>
        <input class="form-control" type="text" name="alamat" required>
        <label for="">Nama Kelas</label>
        <select class="form-control" name="id_kelas" id="">
            @foreach ($kelas as $k)
            <option value="{{$k->id}}">{{$k->nama_kelas}}</option>
            @endforeach
        </select>
        <button class="btn btn-success mt-2" type="submit">Simpan</button>
    </form>
</div>
@endsection
