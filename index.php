<?php 
    $cookie_nama1 = "angka";
    $cookie_nilai1 = "";
    $cookie_nama2 = "opr";
    $cookie_nilai2 = "";

    if (isset($_POST['angka'])) {
        $angka = $_POST['input'] . $_POST['angka'];
    } else {
        $angka = '';
    }

    if (isset($_POST['opr'])) {
        $cookie_nilai1 = $_POST['input'];
        setcookie($cookie_nama1, $cookie_nilai1, time() + (86400 * 30), "/");

        $cookie_nilai2 = $_POST['opr'];
        setcookie($cookie_nama2, $cookie_nilai2, time() + (86400 * 30), "/");
        $angka = "";
    }

    if (isset($_POST["equal"])) {
        $angka = $_POST['input'];
        switch ($_COOKIE['opr']) {
            case '+':
                $hasil = $_COOKIE['angka'] + $angka;
                break;
            case '-':
                $hasil = $_COOKIE['angka'] - $angka;
                break;
            case '*':
                $hasil = $_COOKIE['angka'] * $angka;
                break;
            case '/':
                $hasil = $_COOKIE['angka'] / $angka;
                break;
        }
        $angka = $hasil;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="3061901.webp" type="image/x-icon">
</head>
<body>
    <div class="main">
        <h1>Kalkulator Sederhana📱</h1>
    </div>
    <div class="calc">
        <form action="" method="post">
                <input type="text" class="maininput" name="input" value="<?php echo @$angka ?>"> <br>
                <div class="sama">
                    <input type="submit" class="numbtn" name="angka" value="7">
                    <input type="submit" class="numbtn" name="angka" value="8">
                    <input type="submit" class="numbtn" name="angka" value="9">
                    <input type="submit" class="calbtn" name="opr" value="+"> 
                </div>
                <div class="sama">
                    <input type="submit" class="numbtn" name="angka" value="4">
                    <input type="submit" class="numbtn" name="angka" value="5">
                    <input type="submit" class="numbtn" name="angka" value="6">
                    <input type="submit" class="calbtn" name="opr" value="-">
                </div>
                <div class="sama">
                    <input type="submit" class="numbtn" name="angka" value="1">
                    <input type="submit" class="numbtn" name="angka" value="2">
                    <input type="submit" class="numbtn" name="angka" value="3">
                    <input type="submit" class="calbtn" name="opr" value="*">
                </div>
                <div class="beda">
                    <input type="submit" class="numbtn" name="angka" value="0">
                    <input type="submit" class="equal" name="equal" value="=">
                    <input type="submit" class="calbtn" name="opr" value="/">
                </div>
        </form>
    </div>
</body>
</html>
