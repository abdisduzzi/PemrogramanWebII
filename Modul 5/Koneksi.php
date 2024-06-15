<?php
function koneksi()
{
$datasourcename = 'mysql:host=localhost:4306;dbname=perpustakaan';
$username = 'root';
$password = 'TRAP';


    try {
        $connect = new PDO($datasourcename, $username, $password);
        $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        print "Gagal Terhubung ke Database: " . $e->getMessage() . "<br/>";
        die();
    }
    return $connect;
}