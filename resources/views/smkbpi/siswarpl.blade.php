<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/my-style.css">
    <title>Daftar Makanan</title>
</head>
<body>
    <h1>Daftar Makanan</h1>
    <ol>
        <?php foreach ($siswa as $nama) {
            echo "<li> $nama </li>";
        }?>
    </ol>
    <div>
        <img src="img/img-1.jpg" alt="Mie Ayam">
        <img src="img/img-2.jpg" alt="Ayam Bakar">
    </div>
    <div>
        Copyright &copy; <?php echo date("Y"); ?> Rizky Rasya
    </div>
    <script src="js/my-script.js"></script>
</body>
</html>