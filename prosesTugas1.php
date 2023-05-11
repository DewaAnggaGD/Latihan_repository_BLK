<?php

// $nama = $_POST ['nama'];
// $email = $_POST ['email'];
// $alamat = $_POST ['alamat'];
// $program = $_POST ['program'];
// $tahunDaftar = $_POST ['tahunDaftar'];

// echo $nama."<br>";
// echo $email."<br>";
// echo $alamat."<br>";
// echo $program."<br>";
// echo $tahunDaftar."<br>";


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap-5.1.3-dist/css/bootstrap.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table table-header-hover table-striped">
                    <tr>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Alamat</th>
                        <th>Program Pelatihan</th>
                        <th>Tahun</th>
                    </tr>
                    <tr>
                        <td><?= $_POST ['nama'];?></td>
                        <td><?= $_POST ['email'];?></td>
                        <td><?= $_POST ['alamat'];?></td>
                        <td><?= $_POST ['program'];?></td>
                        <td><?= $_POST ['tahun'];?></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</body>

</html>