<?php

session_start();

$_SESSION['user_id'] = 1;

$db = new PDO('localhost', 'root', '', 'todoapp');

// Make sure that connection is established
if (!isset($_SESSION['user_id'])) {
    die('You are not signed in')
}