<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['email'])) {
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Profil Anda</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <style>
        body {
            background-color: #f8f9fa;
            margin-top: 30px;
            margin-bottom: 30px;
        }
        .card {
            background-color: #ffffff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        }
        
        .card{
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            width: 80%;
            margin: auto;
        }
        .font-weight-bold {
            font-weight: bold;
        }
        .back-left{
            background-color: #00008B;
            color: white;
            margin: 20px;
            border-radius: 10px;
            min-height: 290px;
        }
        .back-right{
            background-color: #00008B;
            color: white;
            margin: 20px;
            margin-left: -5px;
            border-radius: 10px;
            min-height: 290px;
        }
        .swiper {
        width: 100%;
        height: 400px;
        }
    </style>
</head>
<body>
    <header>
    <div class="card text-center">
        <div class="card-header">
            Curriculum Vitae
        </div>
        <div class="card-body">
            <h5 class="card-title"><b><?php echo $_SESSION['nama']; ?></b></h5>
            <p class="card-text">Saya mempunyai pengalaman kerja di <b><?php echo $_SESSION['pengalaman_kerja']; ?></b> dan memiliki keterampilan <b><?php echo $_SESSION['keterampilan']; ?></b>.</p>
        </div>
        <div class="card-footer text-body-secondary">
        Terakhir diperbarui pada <?php echo date('d F', strtotime($_SESSION['date'])); ?> pukul <?php echo date('H:i:s', strtotime($_SESSION['date'])); ?> WIB
        </div>
    </div>
    </header>
    <div class="card text-center mt-4">
        <h1 class="mb-1">Profil</h1>
        <div class="row">
            <div class="col-4 back-left">
                <div class="col"><img src="<?php echo $_SESSION['foto_path']; ?>" style="margin-top: 20px; margin-left: 15px; margin-right: 15px; width: auto; height: 250px; float: left;"></div>
                <div class="col"  style="margin: 23px; font-size: 20px; text-align: left;"><a style ="text-decoration: underline;">Nama Lengkap</a> </br> <?php echo $_SESSION['nama']; ?></div>
                <div class="col"  style="margin: 20px; font-size: 20px; text-align: left;"><a style ="text-decoration: underline;">Nomor Indeks</a> </br> <?php echo $_SESSION['id']; ?></div>
                <div class="col"  style="margin: 20px; font-size: 20px; text-align: left;"><a style ="text-decoration: underline;">Nomor Kontak</a> </br> <?php echo $_SESSION['telepon']; ?></div>
            </div>
            <div class="col back-right">
                <div class="container">
                    <div class="row">
                        <div class="col" style="margin: 20px; margin-top: 15px; font-size: 20px; text-align: center; text-decoration: underline;">Alamat</div>
                        <div class="col" style="margin: 20px; margin-top: 15px; font-size: 20px; text-align: left;"><?php echo $_SESSION['alamat']; ?></div>
                        <div class="w-100"></div>
                        <div class="col" style="margin: 20px; margin-top: 5px; font-size: 20px; text-align: center; text-decoration: underline;">Email</div>
                        <div class="col" style="margin: 20px; margin-top: 5px; font-size: 20px; text-align: left;"><?php echo $_SESSION['email']; ?></div>
                        <div class="w-100"></div>
                        <div class="col" style="margin: 20px; margin-top: 5px; font-size: 20px; text-align: center; text-decoration: underline;">Website Saya</div>
                        <div class="col" style="margin: 20px; margin-top: 5px; font-size: 20px; text-align: left;"><?php echo $_SESSION['web']; ?></div>
                        <div class="w-100"></div>
                        <div class="col" style="margin: 20px; margin-top: 5px; font-size: 20px; text-align: center; text-decoration: underline;">Pengalaman Kerja</div>
                        <div class="col" style="margin: 20px; margin-top: 5px; font-size: 20px; text-align: left;"><?php echo $_SESSION['pengalaman_kerja']; ?></div>
                        <div class="w-100"></div>
                        <div class="col" style="margin: 20px; margin-top: 5px; font-size: 20px; text-align: center; text-decoration: underline;">Keterampilan</div>
                        <div class="col" style="margin: 20px; margin-top: 5px; font-size: 20px; text-align: left;"><?php echo $_SESSION['keterampilan']; ?></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="button">
            <button type="submit" class="btn btn-success"><a href="update.php" style="color: white; text-decoration: none;">Update Data</a></button>
            <button type="submit" class="btn btn-primary"><a href="logout.php" style="color: white; text-decoration: none;">Logout</a></button>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
<?php
} else {
    header('Location: index.php?error=Belum login');
    exit;
}
?>