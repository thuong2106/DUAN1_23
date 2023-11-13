<?php
include "view/layout/header.php";
$act = $_GET['act'] ?? "";
switch ($act) {
    case "":
        include "view/layout/home.php";
        break;
    case "rooms":

        include "view/layout/rooms.php";
        break;

    default:
        //echo "<h1>404</h1>"; 
}
include "view/layout/footer.php";
