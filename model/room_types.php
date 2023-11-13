<?php
// LIST LOẠI PHÒNG
function get_room_types()
{
    $sql = "SELECT * FROM room_types ORDER BY id ASC";
    $room_type = pdo_query($sql);
    return $room_type;
}

// LẤY THÔNG TIN CHI TIẾT
function get_room_type_detail($id)
{
    $sql = "SELECT room_type_name FROM room_types WHERE id =" . $id;
    $room_type_detail = pdo_query_one($sql);
    return $room_type_detail;
}
// ADD LOẠI PHÒNG
function insert_room_type($tenloaiphong)
{
    $sql = "INSERT INTO room_types(room_type_name) values('$tenloaiphong')";
    pdo_execute($sql);
}
// UPDATE LOẠI PHÒNG 
function update_room_types($id, $tenloai)
{
    $sql = "UPDATE room_types SET room_type_name='$tenloai' where id= $id";
    pdo_execute($sql);
}

// DELETE LOẠI PHÒNG
function delete_room_type($id)
{
    $sql = "DELETE FROM room_types WHERE id=" . $id;
    pdo_execute($sql);
}
