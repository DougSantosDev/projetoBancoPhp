<?php
session_start();
require_once 'classes/User.php';
require_once 'classes/Account.php';

if (!isset($_SESSION['users'])) {
    $_SESSION['users'] = [];
}
?>