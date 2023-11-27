<?php
include "../../model/pdo.php";

function getAllCategories() {
    $options = array('order_by' => 'id');
    return get_all('category', $options);
}
$list_categories = getAllCategories();




// function get_a_categoty(){
//     $options = array('order_by' => 'id');
//     return get_a_data('category', $options);
// }
// $get_a_cate = get_a_categoty();


function addCategory($room_type_name, $price, $number_adult, $number_children, $description, $status)
{
    $data = array(
        'room_type_name' => $room_type_name,
        'price' => $price,
        'number_adult' => $number_adult,
        'number_children' => $number_children,
        // 'service_id' => $service_id,
        'description' => $description,
        'status' => $status,
        'create_date' => date('Y-m-d'),
        'update_date' => date('Y-m-d')
    );
    return save_and_get_result('category', $data);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["add_category"])) {
        $room_type_name = $_POST["room_type_name"];
        $price = $_POST["price"];
        $number_adult = $_POST["number_adult"];
        $number_children = $_POST["number_children"];
        // $service_id = $_POST["service_id"];
        $description = $_POST["description"];
        $status = $_POST["status"];
        $addResult = addCategory($room_type_name, $price, $number_adult, $number_children, $description, $status);
        if ($addResult) {
            header('location:category.php?controller=category');
        } else {
            // Handle error if needed
        }
    }
}

function updateCategory($id, $room_type_name, $price, $number_adult, $number_children, $description, $status)
{
    $data = array(
        'room_type_name' => $room_type_name,
        'price' => $price,
        'number_adult' => $number_adult,
        'number_children' => $number_children,
        // 'service_id' => $service_id,
        'description' => $description,
        'status' => $status,
        'update_date' => date('Y-m-d')
    );
    $where = "id = $id";
    return update_data('category', $data, $where);
}


function deleteCategory($id)
{
    $where = "id = $id";
    return delete_data('category', $where);
}



// lấy ra thông tin sản phẩm vào form sửa

if (isset($_GET['update_category'])) {
    $subCateId = intval($_GET['update_category']);
    return $detailCategory = get_a_data('category', $subCateId);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["update_category"])) {
        var_dump($_POST);
        $id = $_POST["id"];
        $room_type_name = $_POST["room_type_name"];
        $price = $_POST["price"];
        $number_adult = $_POST["number_adult"];
        $number_children = $_POST["number_children"];
        // $service_id = $_POST["service_id"];
        $description = $_POST["description"];
        $status = $_POST["status"];
        $updateResult = updateCategory($id, $room_type_name, $price, $number_adult, $number_children, $description, $status);
        if ($updateResult) {
            header('location:category.php?controller=category');
        } else {
        }
    }
}

//Xóa data
if (isset($_GET["delete_category_id"])) {
    $id = $_GET["delete_category_id"];
    $deleteResult = deleteCategory($id);
    if ($deleteResult) {
        header('location:category.php?controller=category');
    } else {
    }
}
