<?php

include 'config.php';

if (isset($_POST['id'])) {
    session_start();

    if (isset($_SESSION['id'])) {
        $id = $_SESSION['id'];

        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $telepon = $_POST['telepon'];
        $email = $_POST['email'];
        $web = $_POST['web'];
        $pendidikan = $_POST['pendidikan'];
        $pengalaman_kerja = $_POST['pengalaman_kerja'];
        $keterampilan = $_POST['keterampilan'];
        $foto_path = $_POST['foto_path'];

        date_default_timezone_set('Asia/Jakarta');
        $date = date('Y-m-d H:i:s');

        $sql = 'UPDATE cv_data SET nama=?, alamat=?, telepon=?, email=?, web=?, pendidikan=?, pengalaman_kerja=?, keterampilan=?, foto_path=?, date=? WHERE id=?';

        $stmt = $conn->prepare($sql);
        $stmt->bind_param('ssssssssssi', $nama, $alamat, $telepon, $email, $web, $pendidikan, $pengalaman_kerja, $keterampilan, $foto_path, $date, $id);

        if ($stmt->execute()) {
            session_start();

            session_unset();
            session_destroy();

            header('Location: index.php?error=Berhasil. Silahkan login lagi untuk pembaruan sesi!');
            exit;
        } else {
            exit('Gagal memperbarui profil: '.$stmt->error);
        }

        $stmt->close();
    } else {
        exit('Sesi tidak ditemukan. Pastikan Anda sudah login sebelum mengakses halaman ini.');
    }
} else {
    header('Location: update.php?error=Data tidak ditemukan');
    exit;
}
