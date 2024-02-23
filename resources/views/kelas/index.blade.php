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
    <a href="{{ route('kelas.create') }}">Tambah Kelas+</a>
    <table>
        <tr>
            <td>No</td>
            <td>Nama Kelas</td>
            <td>Action</td>
        </tr>
        @foreach ($kelas as $k)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $k->nama_kelas }}</td>
                <td><a href="{{ route('kelas.edit', $k->id) }}">Edit</a>
                    <form action="{{ route('kelas.destroy', $k->id) }}" method="POST">
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
