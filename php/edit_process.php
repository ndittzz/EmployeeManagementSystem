<?php
include "db.php";

$id_pegawai = $_POST['id_pegawai'];
$nama_pegawai = $_POST["nama_pegawai"];
$posisi = $_POST["posisi"];
$umur = $_POST["umur"];
$alamat = $_POST["alamat"];
$gaji = $_POST["gaji"];

$query = mysqli_query(
    $konek,
    "UPDATE pegawai SET nama_pegawai='$nama_pegawai',
        posisi='$posisi',umur='$umur',alamat='$alamat',gaji='$gaji' where id_pegawai='$id_pegawai'"
) or die(mysqli_error($konek));

if ($query) {
    header('Location: ../views/employee_list.php?status=success');
} else {
    header('Location: ../views/edit_employee.php?status=failed');
}

?>