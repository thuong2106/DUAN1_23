<?php
include './header.php';

if ((isset($_GET['act'])) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case 'loai':
            echo "<h1>loai</h1>";
            break;
        break;
    }
} else {
    include './home.php';
}



include './footer.php';
