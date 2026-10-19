
<?php

session_start();

include "../src/koneksi.php";

if (isset($_GET['act']) && $_GET['act'] == 'bayar') {

    $id_pembayaran = $_GET['id_pembayaran'];
    $nisn = $_GET['nisn'];

    // Membuat nomor pembayaran
    $today = date("ymd");

    $query = mysqli_query(
        $koneksi,
        "SELECT MAX(no_bayar) AS last
         FROM pembayaran
         WHERE no_bayar LIKE '$today%'"
    );

    $data = mysqli_fetch_array($query);

    $lastNoBayar = $data['last'];

    if ($lastNoBayar == NULL) {

        $lastNoUrut = 0;

    } else {

        $lastNoUrut = substr($lastNoBayar, 6, 4);

    }

    $nextNoUrut = $lastNoUrut + 1;

    $nextNoBayar = $today . sprintf('%04d', $nextNoUrut);

    $tgl_pembayaran = date('Y-m-d');

    // Mengambil ID petugas yang login
    $admin = $_SESSION['id_petugas'];

    // Mengubah status pembayaran
    $sql = mysqli_query(
        $koneksi,
        "UPDATE pembayaran SET
            no_bayar='$nextNoBayar',
            tgl_pembayaran='$tgl_pembayaran',
            keterangan='LUNAS',
            id_petugas='$admin'
         WHERE id_pembayaran='$id_pembayaran'"
    );

    if ($sql) {

        header(
            "Location: halaman_admin.php?open=data_pembayaran&nisn=$nisn"
        );

        exit;

    } else {

        echo "Pembayaran gagal diproses.";

    }

}

?>