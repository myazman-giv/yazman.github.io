<?php 

require 'functions.php';
$id = $_GET['id'];

if (hapus ($id) > 0 ) {
    echo "<script>
            alert('Data Berhasil diHapus!');
            document.location.href = '../index.php';
        </script>";
} else {
    echo "<script>
        alert('Data Gagal diHapus!');
        document.location.href='../index.php';
    </script>";
}
?>