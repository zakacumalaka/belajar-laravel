<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <button><a href="/produk">Daftar Produk</a></button>
    <form action="/produk/{{$ProdukID->ProdukID}}" method="post">
        @method('put')
        @csrf
        <input type="number" name="ProdukID" placeholder="Masukkan Produk ID" value="{{$ProdukID->ProdukID}}" id="ProdukID" disabled>
        <input type="text" name="NamaProduk" placeholder="Masukkan Nama Produk" value="{{$ProdukID->NamaProduk}}" id="NamaProduk">
        <input type="number" name="Harga" placeholder="Masukkan Harga" value="{{$ProdukID->Harga}}" id="Harga">
        <input type="number" name="Stok" placeholder="Masukkan Stok" value="{{$ProdukID->Stok}}" id="Stok">
        <input type="submit" value="simpan" name="submit">
    </form>
</body>
</html>
