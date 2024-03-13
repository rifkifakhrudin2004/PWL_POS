<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data level pengguna</title>
</head>
<body>
    <h1> Data level pengguna</h1>
    <table border="1" cellpadding="2" cellspacing="0">
        <tr>
            <th>id</th>
            <th>Kode Level</th>
            <th>Nama level</th>
        </tr>
        @foreach ($data as $d)
<tr>
    <td>{{$d->level_id}}</td>
    <td>{{$d->level_kode}}</td>
    <td>{{$d->level_nama}}</td>
</tr>
@endforeach
</table>
</body>
</html>