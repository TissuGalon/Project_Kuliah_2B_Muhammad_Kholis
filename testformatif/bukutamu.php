<!DOCTYPE html>
<html lang="en">
<head>
    <title>Buku Tamu</title>
</head>
<body>
    <h1>Buku tamu untuk database MySQL</h1>
    <form action="bukutamu_add_form.php" method="POST">
        Nama : <input type="text" name="nama" size="35" maxlength="50"> <br>
        Email : <input type="text" name="email" size="35" maxlength="50"> <br>
        Komentar : <textarea name="komentar" rows="5" cols="30"></textarea> <br>
        <input type="submit" value="Simpan">
        <input type="reset" value="Reset">
    </form>
</body>
</html>


