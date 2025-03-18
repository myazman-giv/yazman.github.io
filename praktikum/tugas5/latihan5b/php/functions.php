<?php 
// melakukan koneksi ke database
function koneksi()
{
    $conn = mysqli_connect("localhost", "root", "");
    mysqli_select_db($conn, "pw_tubes_203040164");

    return $conn;
}

// function untuk melakukan query dan memasukannya kedalam array
function query($sql)
{
    $conn = koneksi();
    $result = mysqli_query($conn, "$sql");
    $rows = [];
while ($cow = mysqli_fetch_assoc($result)) {
    $rows [] = $cow;
    }
    return $rows;
}
// fungsi untuk menambahkan data didalam database
function tambah($data)
{
    $conn = koneksi();

    $gambar = htmlspecialchars($data['gambar']);
    $jenis = htmlspecialchars($data['jenis']);
    $deskripsi= htmlspecialchars($data['deskripsi']);
    $umur= htmlspecialchars($data['umur']);
    $bobot= htmlspecialchars($data['bobot']);
    $harga= htmlspecialchars($data['harga']);

    $query = "INSERT INTO sapi
                VALUES
                ('','$gambar','$jenis','$deskripsi','$umur', '$bobot','$harga')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);

}
?>