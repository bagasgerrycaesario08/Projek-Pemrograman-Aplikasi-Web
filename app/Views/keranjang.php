<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>

    <section class="vh-100">
        <div class="container-fluid h-custom">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <a class="navbar-brand" href="/home">Toko Butik</a>
                    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="/home">Home</a>
                            </li>

                        </ul>
                        <H class="d-flex">
                            <a href="/profile" class="nav-link ">Profil <?= $b ?></a>
                        </H>
                        <H class="d-flex">
                            <a href="/Auth_controller/logout" class="nav-link ">Logout</a>
                        </H>
                    </div>
                </div>
            </nav>
            <!-- Section: Design Block -->
            <section class="text-center">
                <!-- Background image -->
                <div class="p-5 bg-image" style="
        background-image: url('/assets/img/1.jpg');
        height: 300px;
        "></div>
                <!-- Background image -->

                <div class="card mx-4 mx-md-5 shadow-5-strong" style="
        margin-top: -100px;
        background: hsla(0, 0%, 100%, 0.8);
        backdrop-filter: blur(30px);
        ">
                    <div class="card-body py-5 px-md-5">

                        <div class="row d-flex justify-content-center">
                            <div class="col-lg-20">
                                <h2 class="fw-bold mb-5">Keranjang</h2>

                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Nama Barang</th>
                                            <th scope="col">Harga</th>
                                            <th scope="col">Gambar</th>
                                        </tr>
                                    </thead>
                                    <?php $i = 1;
                                    $total = 0;
                                    foreach ($a as $a) { ?>
                                        <tbody>
                                            <tr>
                                                <th scope="row"><?= $i ?></th>
                                                <td><?= $a['nama_barang']; ?></td>
                                                <td><?= $a['harga']; ?></td>
                                                <td style="width: 700px;"><img style="max-width: 10%;" src="/assets/img/produk/<?= $a['gambar'] ?>" alt="..."></td>
                                            </tr>
                                        <?php $i++;
                                        $total = $total + $a['harga'];
                                    } ?>
                                        <tr>
                                            <th colspan="2" scope="row">Total</th>
                                            <td><?= $total ?></td>

                                        </tr>



                                        </tbody>
                                </table>
                                <button onclick="myFunction()" type="button" class="btn btn-secondary">Pilih</button>

                                <div id="myDIV" style="display: none;">
                                    <hr>
                                    <button type="button" onclick="indomaret()" class="btn btn-primary">Indomaret</button>
                                    <button type="button" onclick="alfamaret()" class="btn btn-danger">Alfamaret</button>

                                    <div id="indo" style="display: none;">
                                        <hr>
                                        <p class="h4">Kode Pembayaran : <span style="color: red;"> IDM24RT677UW </span></p>
                                    </div>

                                    <div id="alfa" style="display: none;">
                                        <hr>
                                        <p class="h4">Kode Pembayaran : <span style="color: red;"> ALF772WT4UUK </span></p>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Section: Design Block -->



        </div>


        </div>
    </section>


</body>

<footer>
    <script>
        function myFunction() {
            var x = document.getElementById("myDIV");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        };

        function indomaret() {
            var x = document.getElementById("indo");
            var y = document.getElementById("alfa");
            y.style.display = "none"
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        };

        function alfamaret() {
            var x = document.getElementById("alfa");
            var y = document.getElementById("indo");
            y.style.display = "none"
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</footer>

</html>