<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Website Kelas Laravel</h1>
    <hr>
    <a href="{{('/')}}">Home</a>
    <a href="{{('/tentang')}}">Tentang</a>
    <a href="{{('/kontak')}}">kontak</a>
    <a href="{{('/siswa')}}">Data Siswa</a>
    <hr>
    @yield('content')
</body>
</html>