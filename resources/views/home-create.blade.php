<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Ini adalah halaman tambah data</h1>
    <form action="{{ route('home.store') }}" method="post">
        @csrf
        <label for="name">Masukkan Nama Anda</label>
        <input type="text" name="name">
        <button type="submit">Simpan</button>
    </form>

    <p>Ini adalah nama yang Anda masukkan : {{ $name }}</p>
</body>
</html>