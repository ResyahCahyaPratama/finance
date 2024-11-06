<!DOCTYPE html>
<html>

<head>
    <title>Finance Application</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <style>

    </style>
</head>

<body>

    <div class="container">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Finance Application</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?halaman=fitur">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?halaman=harga">Pricing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?halaman=kontak">Kontak</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?halaman=data_user">Data User</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="row">
            <div class="col">
                <?php
                    require_once("koneksi_db.php");
                    require_once("myfunction.php");
                    ini_set("display_errors",1);
                    define("IS_LEWAT_INDEX",true);
                    if(isset($_GET['halaman']))
                    {
                        $halaman = $_GET['halaman'];
                        $nama_file = $halaman.".php";
                        if(file_exists($nama_file) == true)
                        {
                            require_once($nama_file);
                        }
                        else
                        {
                            // buka 404.php
                            require_once("404.php");
                        }
                    }
                    else
                    {
                        // buka landing page
                        require_once("home.php");
                    }
                ?>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</body>

</html>