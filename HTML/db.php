<?php 

define('HOST', 'localhost');
define('DB_NAME', 'db');
define('USER', 'root');
define('PASS', '');

try {
    $db = new PDO("mysql:host=".HOST.";dbname=".DB_NAME, USER, PASS);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    print $e;
}

function query($sql) {
    $req = $this->prepare($sql);
    $req->execute();
    return $req->fetchAll(PDO::FETCH_OBJ);
}
?>