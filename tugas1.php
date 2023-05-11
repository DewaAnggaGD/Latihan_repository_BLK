<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap-5.1.3-dist/css/bootstrap.css">

    <title>Form Pendaftaran</title>
</head>

<body>
    <!-- container -->
    <div class="container mt-3">
        <!-- Row -->
        <div class="row justify-content-md-center">
            <!-- coloumn -->
            <div class="col-8">
                <!-- card Header -->
                <div class="card">
                    <div class="card-header">
                        <h1>Form Pendaftaran</h1>
                    </div>
                    <!-- Card body -->
                    <div class="card-body">
                        <form action="" method="post">
                            <!-- Ini akan berisi halaman form-->
                            <div class="form-floating mb-1">
                                <input type="text" name="nama" class="form-control" id="Nama"
                                    placeholder="name@example.com" Required>
                                <label for="fiNama">Nama</label>
                            </div>
                            <div class="form-floating mb-1">
                                <input type="email" name="email" class="form-control" id="Email"
                                    placeholder="name@example.com" Required>
                                <label for="fiEmail">Email</label>
                            </div>
                            <div class="form-floating">
                                <textarea name="alamat" class="form-control" placeholder="Leave a comment here"
                                    id="Alamat" Required></textarea>
                                <label for="floatingTextarea">Alamat</label>
                            </div>
                            <div class="border border-secondary-subtle mt-2 mb-2">
                            <label for="" class="mb-2 ms-2">Jenis Kelamin</label>
                            <div class="form-check ms-2">
                                <input class="form-check-input" type="radio" name="gender"
                                    id="lk" value="Laki-laki">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Laki-Laki
                                </label>
                            </div>
                            <div class="form-check ms-2">
                                <input class="form-check-input" type="radio" name="gender"
                                    id="pr" value="Perempuan">
                                <label class="form-check-label" for="flexRadioDefault2">
                                   Perempuan
                                </label>
                            </div>
                            </div>
                            <div class="form-floating mt-2">
                                <select class="form-select" name="program" id="Program"
                                    aria-label="Floating label select example" Required>
                                    <option value="" selected disabled>Pilih</option>
                                    <option value="Junior Web Developer">Junior Web Developer</option>
                                    <option value="Digital Marketing">Digital Marketing</option>
                                    <option value="Content Creator">Content Creator</option>
                                    <option value="Desainer Multimedia Muda">Desainer Multimedia Muda</option>
                                </select>
                                <label for="floatingSelect">Program Pelatihan</label>
                            </div>

                            <div class="form-floating mt-2">
                                <select class="form-select" name="tahun" id="Tahun"
                                    aria-label="Floating label select example" Required>
                                    <option value="" selected disabled>Pilih Tahun</option>
                                    <?php
                                  for($a=2000;$a<=2023;$a++):?>
                                    <option value="<?= $a;?>">
                                        <?= $a;?>
                                    </option>
                                    <?php endfor;?>
                                </select>
                                <label for="fsTahun">Tahun Daftar</label>
                            </div>

                            <input name="submit" type="submit" class="btn btn-success mt-3 col-12" value="Daftar">
                    </div>
                    <div class="card-footer text-center">
                        <!-- spinner -->
                        <div class="spinner-border text-primary" role="status" style="display:none">
                        </div>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Alamat</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Program</th>
                                        <th>Tahun</th>
                                    </tr>
                                </thead>

                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="bootstrap-5.1.3-dist/js/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>

    <script>
    $(document).ready(function() {
        getData();

        function getData() {
            $.ajax({
                type: "GET",
                url: "getData.php",
                beforeSend: function(result) {
                    $(".spinner-border").show();
                },
                success: function(result) {
                    $(".spinner-border").hide(1000);
                    $("tbody").html(result);
                    // $("form")[0].reset();
                }
            })
        }
        // event ketika form di submit
        $("form").submit(function(event) {
            event.preventDefault();
            // console.log("Form Telah Di Submit");
            var nama = $("#Nama").val();
            var email = $("#Email").val();
            var alamat = $("#Alamat").val();
            var program = $("#Program").val();
            var tahun = $("#Tahun").val();
            var gender = $("input[name='gender']:checked").val();
            var formData = {
                nama: nama,
                email: email,
                alamat: alamat,
                program: program,
                tahun: tahun,
                gender:gender
            }
            $("form").trigger("reset");
            $.ajax({
                type: "POST",
                url: "process.php",
                data: formData,
                beforeSend: function(result) {
                    $(".spinner-border").show();
                },
                success: function(result) {
                    $(".spinner-border").hide(1000);
                    $("tbody").append(result);
                    getData();
                    // $("form")[0].reset();
                }
            })
        })
    })
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
</body>

</html>