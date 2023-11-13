<?php
function get_room_types()
{
    $sql = "SELECT * FROM room_types ORDER BY room_type_name DESC";
    $room_type = pdo_query($sql);
    return $room_type;
}

// THÊM LOẠI PHÒNG
function insert_room_type($tenloaiphong)
{
    $sql = "INSERT INTO room_types(room_type_name) values('$tenloaiphong')";
    pdo_execute($sql);
}

function load_room_type_name($room_type_id)
{
    $sql = "SELECT * FROM room_types WHERE id =" . $room_type_id;
    $room_type = pdo_query_one($sql);
    extract($room_type);
    return $room_type_name;
}


// load
function loadone_room_type($room_type_id)
{
    $sql = "SELECT name FROM room_types WHERE id =" . $room_type_id;
    $room_type = pdo_query_one($sql);
    return $room_type;
}
// sua 
function update_room($id, $name)
{
    $sql = "update room_types set room_type_name='$name' where id= $id";
    pdo_execute($sql);
}
function loadall_room_type()
{
    $sql = "select * from room_types order by id desc";
    $room_type = pdo_query($sql);
    return  $room_type;
}
// xoa 
function delete_room_type($id)
{
    $sql = "delete from room_types where id=" . $id;
    pdo_execute($sql);
}