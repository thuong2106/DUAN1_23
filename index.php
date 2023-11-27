<?php
include_once "./model/pdo.php";
include_once "./view/controller/index.php";
// include_once "./admin/controllers/category.php";

$list_three_home = get_home();
// $get_a_cate = get_a_categoty();
$act = $_GET['act'] ?? "";
switch ($act) {
    case "":
        $title = "Trang chủ";
        $VIEW = "view/layout/home.php";
        break;
    case "rooms":
        $listcate = getAllCategories();
        $title = "Danh sách phòng";
        $VIEW = "view/layout/rooms.php";
        break;
    case "detail":
        $title = "Chi tiết phòng";
        if (isset($_GET['id']) && ($_GET['id'] > 0)) {
            $id = intval($_GET['id']);
            // var_dump($id);
            $list_categories = getRoomDetail($id);
            // var_dump($list_categories);die;
            extract($list_categories);
            $list_categoriess = getRoomDetails($id_category);
            extract($list_categoriess);
        }

        $VIEW = "view/layout/detail.php";
        break;
    case "booknow":
        $title = "Đặt phòng";
        if (isset($_GET['id']) && ($_GET['id'] > 0)) {
            $id = intval($_GET['id']);
            // var_dump($id);
            $list_categories = getRoomDetail($id);
            // var_dump($list_categories);die;
            // var_dump($list_categories);
            // die;
            extract($list_categories);
            $list_categoriess = getRoomDetails($id_category);
            extract($list_categoriess);
        }
        $VIEW = "view/layout/booknow.php";
        break;
        //lọc category 
    case 'loccategory':
        if(isset($_GET['id']) && ($_GET['id'] > 0)){
            $id_category = $_GET['id'];
        }else {
            $id_category = "";
        }
        $filtercate= fillter_category("",$id_category);
        $name_cate = inser_name_cate($id_category);
        // echo '<pre>';
        // var_dump($name_cate);
        // echo'</pre>';
        // die;
        // extract($name_cate);
        $listcate = getAllCategories();
        $VIEW = "view/layout/loccategory.php";
        break;
    default:
        //echo "<h1>404</h1>"; 
}
include "view/layout/header.php";
include $VIEW;
include "view/layout/footer.php";
