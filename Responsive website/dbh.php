<?php
include 'config.php';
$dbh = new PDO('mysql:host='. HOST .';dbname=' . DATABASE, USER, PASSWORD);
$dbh->query('SET NAMES utf8');
$dbh->query('SET CHARACTER_SET utf8_unicode_ci');
?>