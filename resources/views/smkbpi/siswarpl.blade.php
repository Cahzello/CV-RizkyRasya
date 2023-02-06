<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link rel="stylesheet" href="css/my-style.css"> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Daftar Makanan</title>
</head>
<body>
    <div class="container text-center mt-4">
        <h1>Daftar Makanan</h1>
        <ol class="list-group my-4">
            <?php foreach ($siswa as $nama) {
                echo "<li class=\"list-group-item\"> $nama </li>";
            }?>
        </ol>

    </div>
    <div class="container text-center mt-4">
        <img class="rounded-circle img-thumbnail m-2" src="img/img-1.jpg" alt="Mie Ayam" width="300px">
        <img class="rounded-circle img-thumbnail m-2" src="img/img-2.jpg" alt="Ayam Bakar" width="300px">
    </div>
    <div class="container text-center mt-4">
        Copyright &copy; <?php echo date("Y"); ?> Rizky Rasya
    </div>
    <script src="js/my-script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>