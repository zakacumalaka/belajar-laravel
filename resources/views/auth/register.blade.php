<form action="/register" method="post">
    @csrf
    <input type="text" name="name" id="name" placeholder="Masukkan Nama">
    <input type="email" name="email" id="email" placeholder="Masukkan Email">
    <input type="password" name="password" id="password" placeholder="Masukkan Password">
    <button type="submit">Masuk</button>
    </form>
