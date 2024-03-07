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
    <a href="{{ route('siswa.create') }}">Tambah Kelas+</a>
    <a href="{{ route('siswa.trash') }}">History Data</a>
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
                <td><a href="{{ route('siswa.edit', $siswa->id) }}">Edit</a>
                    <form action="{{ route('siswa.destroy', $siswa->id) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</body>
</html>
