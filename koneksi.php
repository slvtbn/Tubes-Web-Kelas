<?php 
    $koneksi = mysqli_connect('localhost', 'root', '', 'db_gardenq');
    if(!$koneksi) {
        die("Connection Failed : " . mysqli_connect_error);
    }
?>