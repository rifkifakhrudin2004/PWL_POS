<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Ubah</title>
</head>
<body>
    <h1> Form Ubah data user</h1>
    <a href="{{ route('/user') }}">Kembali</a>
    <br>
    <form method="post" action="{{ route('/user/ubah_simpan',$data->user_id) }}">
        {{csrf_field()}}
        {{method_field('PUT') }}

        <label>Username</label>
        <input type="text" name="username" value="{{$data->username}}">
        <br>

        <label>Nama</label>
        <input type="text" name="nama" value="{{$data->nama}}">
        <br>

        <label>Level ID</label>
        <input type="number" name="level_id" value="{{$data->level_id}}">
        <br>


        <input type="submit" name="btn btn-succes" value="Ubah">
    </form>    
</body>
</html>