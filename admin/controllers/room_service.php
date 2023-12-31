<?php


    include_once "../../model/pdo.php";
    function getAllService() {
        $options = array('order_by' => 'id');
        return get_all('room_service', $options);
    }
    $list_service = getAllService();

    



    function updateService($id, $service_name, $description, $price, $status) {
        $data = array(
            'service_name' => $service_name,
            'description' => $description,
            'price' => $price,
            'status' => $status
        );
        $where = "id = $id";
        return update_data('room_service', $data, $where);
    }
    
    function deleteService($id) {
        $where = "id = $id";
        return delete_data('room_service', $where);
    }
    function addService($service_name, $description, $price,$status) {
        $data = array(
            'service_name' => $service_name,
            'description' => $description,
            'price' => $price,
            'status' => $status
            
        );
        return save_and_get_result('room_service', $data);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["add_service"])) {
            $service_name = isset($_POST['service_name']) ? $_POST['service_name'] : '';
            $description = isset($_POST['description']) ? $_POST['description'] : '';
            $price = isset($_POST['price']) ? $_POST['price'] : '';
            $status = isset($_POST['status']) ? $_POST['status'] : '';
    
            $addResult = addService($service_name, $description, $price, $status);
    
            if ($addResult) {
                // header('location:listservice.php?controller=room_service');
                echo "Thêm mới thành công!";
            } else {
                echo "Chưa thêm được loại phòng. $addResult";
            }
        }
    }
    
    // lấy ra thông tin sản phẩm vào form sửa
    if (isset($_GET['update_service'])) {
        $subRoomId = intval($_GET['update_service']);
        return $detailService = get_a_data('room_service', $subRoomId);
    }
            
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["update_service"])) {
            $id = isset($_POST['id']) ? $_POST['id'] : '';
            $service_name = isset($_POST['service_name']) ? $_POST['service_name'] : '';
            $description = isset($_POST['description']) ? $_POST['description'] : '';
            $price = isset($_POST['price']) ? $_POST['price'] : '';
            $status = isset($_POST['status']) ? $_POST['status'] : '';
    
            $updateResult = updateService($id, $service_name, $description, $price, $status);
    
            if ($updateResult) {
               // header('location:listservice.php?controller=room_service');
             
                echo "Cập nhật thành công!";
            } else {
                echo "Chưa cập nhật được loại phòng. $updateResult";
            }
        }
    }
    

    //Xóa data
    if (isset($_GET["delete_service_id"])) {
        $id = $_GET["delete_service_id"];
        $deleteResult = deleteService($id);
        if ($deleteResult) {
            // header('location:listservice.php?controller=room_service');
            echo "Xóa thành công!";
        } else {
            echo "Chưa xóa được loại phòng. $deleteResult";
        }
    }

?>