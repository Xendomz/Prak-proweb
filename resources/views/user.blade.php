<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Data Diri:</h1>
    <table>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td>{{ $users[$user]['name'] }}</td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td>{{ $users[$user]['address'] }}</td>
        </tr>
    </table>
</body>
</html>
