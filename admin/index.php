<?php
include '../model/pdo.php';
include '../model/room_types.php';
include './header.php';

if ((isset($_GET['act'])) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {

            // LIST LOẠI PHÒNG
        case 'loaiphong':
            $room_type = get_room_types();
            include './room_types/list.php';
            break;

            // ADD LOẠI PHÒNG
        case 'addloaiphong':
            if (isset($_POST['themloai']) && ($_POST['themloai'])) {
                $tenloaiphong = $_POST['tenloai'];
                insert_room_type($tenloaiphong);
                $thongbao = "Thêm thành công!";
            }
            include './room_types/add.php';
            break;

            // UPDATE LOẠI PHÒNG
        case 'suatype':    
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                if (isset($_POST['testcapnhap'])) {
                    $tenloai = $_POST['tenloai'];
                    $id = $_GET['id'];
                    update_room_types($id, $tenloai);
                    $thongbao = "Cập nhật thành công!";
                    // header("Location: http://localhost/DUAN1_23/admin/index.php?act=loaiphong");
                    // exit;
                }
            } 
            include "./room_types/update.php";
            break;
            // DELETE LOẠI PHÒNG
        case 'xoatype':
            // LẤY ID VỀ
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $id = $_GET['id'];
                delete_room_type($id);
                $tb = "Xóa thành công!";
            }
            // LOAD LẠI DANH MỤC
            $room_type = get_room_types();
            include "./room_types/list.php";
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
