<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Data Kelas</h1>
    <a href="{{ route('siswa.index') }}">Kembali</a>
    <table border="1">
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
                    <a href="{{ route('siswa.restore', $siswa->id) }}">Restore</a>
                    <a href="{{ route('siswa.delete', $siswa->id) }}">Delete</a>
                </td>
            </tr>
        @endforeach
    </table>
</body>
</html>
