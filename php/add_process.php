<?php
include "db.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_pegawai = $_POST["nama_pegawai"];
    $posisi = $_POST["posisi"];
    $umur = $_POST["umur"];
    $alamat = $_POST["alamat"];
    $Gaji = $_POST["Gaji"];

    $query = mysqli_query(
        $konek,
        "INSERT INTO pegawai (nama_pegawai, posisi, umur, alamat, Gaji) VALUES ('$nama_pegawai', '$posisi', $umur, '$alamat', '$Gaji')"
    ) or die(mysqli_error($konek));

    if ($query) {
        header('Location: ../views/employee_detail.php');
    } else {
        header('Location: ../views/add_edit_employee.php');
    }
}
?>