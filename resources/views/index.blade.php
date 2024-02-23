@extends('layouts')

@section('content')
<h1>Tabel User</h1>
<table>
    <tr>
        <td>No</td>
        <td>nama</td>
        <td>alamat</td>
    </tr>
    @foreach ($users as $user)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $user['name'] }}</td>
        <td>{{ $user['address'] }}</td>
    </tr>
    @endforeach
</table>
@endsection

