<?php
$datasourcename = 'mysql:host=localhost;dbname=koneksi';
$username = 'root';
$password = '';

try {
    $con = new PDO($datasourcename, $username, $password,
           array(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION, PDO::ATTR_PERSISTENT => true)
          );
} catch (PDOException $e) {
    print "Koneksi error: ".$e->getMessage()."<br/>";
    die();
}
?>