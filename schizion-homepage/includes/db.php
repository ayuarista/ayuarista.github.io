<?php

session_start();

$con = mysqli_connect("localhost","root","","schizionnewatika");
if (mysqli_connect_errno()) {
    echo "Koneksi Gagal" . mysqli_connect_error();
}
else {
}




?>