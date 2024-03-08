@extends('layouts')

@section('content')
    <div class="container">
        <h1>Form Siswa</h1>
        <form action="{{ route('siswa.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="">NIK</label>
                <input class="form-control" type="text" name="nik">
            </div>
            <div class="form-group">
                <label for="">Nama siswa</label>
                <input class="form-control" type="text" name="nama_siswa">
            </div>
            <div class="form-group">
                <label for="">Alamat</label>
                <input class="form-control" type="text" name="alamat">
            </div>
            <div class="form-group">
                <label for="">Nama Kelas</label>
                <select class="form-control" name="id_kelas" id="">
                    @foreach ($kelas as $k)
                        <option value="{{ $k->id }}">{{ $k->nama_kelas }}</option>
                    @endforeach
                </select>
            </div>
            <button class="btn btn-success mt-2" type="submit">Simpan</button>
        </form>
    </div>
@endsection
