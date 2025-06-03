<?php
session_start();

require_once __DIR__ . "/classes/User.php";
require_once __DIR__ . "/classes/Account.php";

if (!isset($_SESSION['users'])) {
    $_SESSION['users'] = [];
}
