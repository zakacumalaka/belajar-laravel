<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="">
        <input type="search" name="keyword">
        <button type="submit">Search</button>
    </form>
    <button><a href="/produk/tambah">Tambah Produk</a></button>
    <table border="2">
        <tr>
            <td>ProdukID</td>
            <td>NamaProduk</td>
            <td>Harga</td>
            <td>Stok</td>
            <td colspan="2">Aksi</td>

        </tr>
        @foreach ($produk as $a)
            <tr>
                <td>{{ $a->ProdukID }}</td>
                <td>{{ $a->NamaProduk }}</td>
                <td>{{ $a->Harga }}</td>
                <td>{{ $a->Stok }}</td>
                <td>
                    <form action="/produk/{{ $a->ProdukID }}" method="post">
                        @csrf
                        @method('delete')
                        <input type="submit" value="DELETE">
                    </form>
                </td>
                <td>
                    <button><a href="/produk/{{ $a->ProdukID }}/edit">EDIT</a></button>
                </td>
            </tr>
        @endforeach
    </table>
    {{ $produk->links() }}
</body>

</html>
