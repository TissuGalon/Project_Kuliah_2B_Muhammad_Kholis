<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>No5</title>
</head>

<body>
    <h1>Praktikum Pemrograman Web Kelas 2B</h1>
    <h2>Membuat Program Menghitung Nilai Secara Dinamis</h2>

    <form action="no5.php" method="GET">
        Nilai 1 : <input type="number" name="angka1" required><br>
        <select name="operator" id="">
            <option value="+" selected>+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select><br>
        Nilai 2 : <input type="number" name="angka2" required><br><br>
        Hasilnya adalah : <br>

        <b>
            <?php
            if (isset($_GET['angka1']) && isset($_GET['angka2']) && isset($_GET['operator'])) {
                switch ($_GET['operator']) {
                    case "+":
                        echo $_GET['angka1'] + $_GET['angka2'];
                        break;
                    case "-":
                        echo $_GET['angka1'] - $_GET['angka2'];
                        break;
                    case "*":
                        echo $_GET['angka1'] * $_GET['angka2'];
                        break;
                    case "/":
                        echo $_GET['angka1'] / $_GET['angka2'];
                        break;
                }
            }
            ?>
        </b>

        <br>
        <br>
        <input type="submit" value="Hitung">
    </form>

    <script>
        function reload() {
            window.location.href = "no5.php";
        }
    </script>

    <button onclick="reload()">Reset</button>


</body>

</html>