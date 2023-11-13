<?php
include '../model/pdo.php';
include '../model/room_types.php';
include './header.php';

if ((isset($_GET['act'])) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case 'loaiphong':
            $room_type = get_room_types();
            include './room_types/list.php';
            break;
        case 'addloaiphong':
            if (isset($_POST['themloai']) && ($_POST['themloai'])) {
                $tenloaiphong = $_POST['tenloai'];
                insert_room_type($tenloaiphong);
                $thongbao = "Thêm thành công!";
            }
            include './room_types/add.php';
            break;
        case "suatype":
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                if (isset($_POST['testcapnhap'])) {
                    $tenloai = $_POST['tenloai'];
                    $id = $_GET['id'];
                    update_room($id, $tenloai);
                    $thongbao = "Cập nhật thành công";
                    header("Location: index.php?act=listlp");
                }
            }
            include "./room_types/update.php";
            break;
        case 'listlp':
            $room_type = loadall_room_type();
            include "list.php";
            break;
        case 'phong':
            echo "<h1>hi</h1>";
            break;
        case 'update':
            include './room_types/list.php';
            break;
    }
} else {
    include './home.php';
}



include './footer.php';
