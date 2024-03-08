@extends('layouts')

@section('content')
<div class="container">
    <h1>Form Siswa</h1>
    <form action="{{ route('siswa.update', $siswa->id) }}" method="POST">
        @method('PUT')
        @csrf
        <label for="">NIK</label>
        <input class="form-control" type="text" name="nik" value="{{ $siswa->NIK }}" required>
        <label for="">Nama siswa</label>
        <input class="form-control" type="text" name="nama_siswa" value="{{ $siswa->nama_siswa }}" required>
        <label for="">Alamat</label>
        <input class="form-control" type="text" name="alamat" value="{{ $siswa->alamat }}" required>
        <label for="">Nama Kelas</label>
        <select class="form-control" name="id_kelas" id="">
            @foreach ($kelas as $k)
            <option value="{{$k->id}}" {{ $siswa->id_kelas == $k->id ? 'selected' : '' }} > {{$k->nama_kelas}}</option>
            @endforeach
        </select>
        <button class="btn btn-success mt-2" type="submit">Simpan</button>
    </form>
</div>
@endsection

