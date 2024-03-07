<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Form Siswa</h1>
    <form action="{{ route('siswa.update', $siswa->id) }}" method="POST">
        @method('PUT')
        @csrf
        <label for="">NIK</label>
        <input type="text" name="nik" value="{{ $siswa->NIK }}" required>
        <label for="">Nama siswa</label>
        <input type="text" name="nama_siswa" value="{{ $siswa->nama_siswa }}" required>
        <label for="">Alamat</label>
        <input type="text" name="alamat" value="{{ $siswa->alamat }}" required>
        <label for="">Nama Kelas</label>
        <select name="id_kelas" id="">
            @foreach ($kelas as $k)
            <option value="{{$k->id}}" {{ $siswa->id_kelas == $k->id ? 'selected' : '' }} > {{$k->nama_kelas}}</option>
            @endforeach
        </select>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>
