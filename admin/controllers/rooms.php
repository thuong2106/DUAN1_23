<?php
include_once "../../model/pdo.php";
// include_once '../../view/layout/home.php';
function getAllrooms()
{
    $options = array(
        'select' => 'rooms.*, 
        category.room_type_name as name_category, 
        category.price as price, 
        category.number_adult as number_adult, 
        category.number_children as number_children, 
        room_service.service_name as name',
        'order_by' => 'rooms.id',
        'join'   => 'JOIN category ON rooms.id_category = category.id 
                     JOIN room_service ON rooms.id_service = room_service.id'
    );
    return get_all('rooms', $options);
}

$list_rooms = getAllrooms();




function getAllCategories()
{
    $options = array('order_by' => 'id');
    return get_all('category', $options);
}
$list_categories = getAllCategories();

function getAllService()
{
    $options = array(
        'order_by' => 'id',
        'where' => 'status = 1'
    );
    return get_all('room_service', $options);
}
$allServices = getAllService();

// function get_a_categoty(){
//     $options = array('order_by' => 'id');
//     return get_a_data('category', $options);
// }
// $get_a_cate = get_a_categoty();

function addRoom($room_name, $img, $description, $id_service, $id_category, $status)
{
    $service = implode(',', $id_service);
    $data = array(
        'room_name' => $room_name,
        'description' => $description,
        'img' => $img,
        'id_service' => $service,
        'id_category' => $id_category,
        'status' => $status,
        'create_date' => date('Y-m-d'),
        'update_date' => date('Y-m-d')
        // Add other fields as needed
    );
    return save_and_get_result('rooms', $data);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["add_rooms"])) {
        // extract($_POST);
        // var_dump($_POST);die;
        // var_dump($_POST);die;
        // $id = $_POST["id"];
        $room_name = $_POST["room_name"];
        $description = $_POST["description"];
        $id_service = $_POST['id_service'];
        $id_category = $_POST['id_category'];
        $status = isset($_POST['status']) ? $_POST['status'] : '';
        $img = $_FILES['img']['name'];
        $target_dir = "../upload";
        $str = implode(',', $_POST['id_service']);
        // echo ($str);die;
        $target_file = $target_dir . basename($_FILES['img']['name']);


        if (move_uploaded_file($_FILES["img"]['tmp_name'], $target_file)) {
        } else {
        }
        $selectedServices = isset($_POST["id_service"]) ? $_POST["id_service"] : [];

        $conn = pdo_get_connection();
        // $sl = "INSERT INTO rooms()"
        $addResult = addRoom($room_name, $img, $description, $selectedServices, $id_category, $status);
        // var_dump($addResult);
        // die;
        if ($addResult) {
            header('location:list.php?controller=rooms');
            echo "Thêm mới thành công!";
        } else {
            echo "Chưa thêm được loại phòng. $addResult";
        }
    }
}


function updaterooms($id, $room_name, $img, $id_category, $description, $status)
{
    $detailrooms = get_a_data('rooms', $id);
    $data = array(
        'room_name' => $room_name,
        'id_category' => $id_category,
        'img' => $img == "update/" ? $detailrooms["img"]  : $img,
        'description' => $description,
        'status' => $status,
        'update_date' => date('Y-m-d')
    );
    // var_dump($data);die;
    $where = " id = $id";
    return update_data('rooms', $data, $where);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["update_rooms"])) {
        // var_dump($_POST);die;
        $id = $_POST["id"];
        $id_category = $_POST["id_category"];
        $room_name = $_POST["room_name"];
        $description = $_POST["description"];
        $status = $_POST["status"];
        $img =  (isset($_FILES['img']['name'])) ? "rooms/" . $_FILES['img']['name'] : [];
        $target_dir = "../upload/";
        $targetFile = $target_dir . basename($_FILES["img"]["name"]);
        $updateResult = updaterooms($id, $room_name, $img, $id_category, $description, $status);
        // var_dump($updateResult);die;
        if ($updateResult) {
            header('location:list.php?controller=rooms');
            echo "Cập nhật thành công!";
        } else {
            echo "Chưa cập nhật được loại phòng. $updateResult";
        }
    }
}
// lấy ra thông tin sản phẩm vào form sửa
if (isset($_GET['update_rooms'])) {
    $id = intval($_GET['update_rooms']);
    $detailrooms = get_a_data('rooms', $id);
    // echo ($id);
    // echo json_encode($detailrooms);
    //$list_categories = getAllCategories();
}


function deleterooms($id)
{
    if ($_SERVER['REQUEST_METHOD'] = 'POST') {
    }
    $where = "id = $id";
    return delete_data('rooms', $where);
}

// Xóa data
if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $deleteResult = deleterooms($id);

    // if ($deleteResult) {
    //     header('location: list.php?controller=rooms');
    //     // die;
    // } else {
    //     echo "Chưa xóa được loại phòng. $deleteResult";
    // }
}
