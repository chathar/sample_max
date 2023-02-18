<?php
require "_conf.php";

$action = isset($_GET['action']) ? $_GET['action'] : 'home';

switch ($action) {
    case 'login':
        include "actions/login.php";
        break;
    case 'logout':
        include "actions/logout.php";
        break;
    default:
        break;
}

include "home.php";
