<!DOCTYPE html>
<html lang="en">
<head>
    <title>Cari Database</title>
</head>
<body>
    <form action="hasilsearch.php" method="POST">
        <select name="kolom" id="">
            <option value="nama">nama</option>
            <option value="email">email</option>
        </select>
        Masukkan kata yang anda cari
        <input type="text" nama="cari">
        <input type="submit" value="Cari">
    </form>
</body>
</html>