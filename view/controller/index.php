<?php 
include_once "./model/pdo.php";

//get_three home

function get_home()
{
    $options = array(
        'select' => 'rooms.*, 
        category.room_type_name as name_category, 
        category.price as price, 
        category.number_adult as number_adult, 
        category.number_children as number_children',
        'join'   => 'JOIN category ON rooms.id_category = category.id',
        'order_by' => 'rooms.id DESC',
        'limit' => '0,3',
    );
    return get_all('rooms', $options);
}

$list_three_home = get_home();

// // detail
// function getRoomDetail($id)
// {
//     $options = array(
//         'select' => 'rooms.*, 
//         category.room_type_name as name_category, 
//         category.price as price',
//         'join'   => 'JOIN category ON rooms.id_category = category.id',
//         'order_by' => 'rooms.id DESC',
//     );
//     $where = " id = $id";
//     return get_a_dataa('rooms', $options, $where);
    
// }

function getRoomDetail($id)
{
    $options = array(
        'select' => '*',
    );
    $where = " id = $id";
    return get_a_dataa('rooms', $options, $where);
}
function getRoomDetails($id)
{
    $options = array(
        'select' => '*',
    );
    $where = " id = $id";
    return get_a_dataa('category', $options, $where);
}

function getAllCategories()
{
    $options = array('order_by' => 'id');
    return get_all('category', $options);
}

//loc category 
function fillter_category($kyw,$id_category){
    $options = array(
        'select' => '*',
    );

    $where = "1";
    if(isset($kyw)){
    $where = "AND room_name LIKE '%" . $kyw . "%'";
    }else {
        $kyw ="";
    }
    $where = "AND id_category = $id_category";

    return get_all('rooms', $options,$where);
}

//in ra ten danh muc one
function inser_name_cate($id)
{
    $options = array(
        'select' => '*',
    );
    $where = " id = $id";
    $test = get_a_dataa('category', $options, $where);
    if ($test) {
        extract($test);
    }

    return $test;
}

?>