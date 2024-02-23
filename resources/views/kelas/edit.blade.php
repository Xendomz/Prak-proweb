<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Form Kelas</h1>
    <form action="{{ route('kelas.update', $kelas->id) }}" method="POST">
        @method('PUT')
        @csrf
        <label for="">Nama Kelas</label>
        <input type="text" name="nama_kelas" value="{{ $kelas->nama_kelas }}" required>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>
