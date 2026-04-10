<?php
try { 
    $dbh = new PDO('mysql:host=127.0.0.1', 'root', ''); 
    $dbh->exec('CREATE DATABASE IF NOT EXISTS sema_unimus_db'); 
    echo 'DB created';
} catch(Exception $e) {
    echo $e->getMessage();
}
