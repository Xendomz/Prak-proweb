@extends('layouts')

@section('content')
    <div class="container-fluid">
        <h1>Data Kelas</h1>
        <a class="btn btn-success mb-2" href="{{ route('kelas.create') }}">Tambah Kelas+</a>
        <table class="table table-bordered">
            <tr>
                <td>No</td>
                <td>Nama Kelas</td>
                <td>Action</td>
            </tr>
            @foreach ($kelas as $k)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $k->nama_kelas }}</td>
                    <td>
                        <form action="{{ route('kelas.destroy', $k->id) }}" method="POST" class="inline-form">
                            @method('DELETE')
                            @csrf
                            <a class="btn btn-warning" href="{{ route('kelas.edit', $k->id) }}">Edit</a>
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection

