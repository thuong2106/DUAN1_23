<?php
include "../../model/pdo.php";

function getAllBooking()
{
    $options = array('order_by' => 'id');
    return get_all('bookings', $options);
}
$list_booking = getAllBooking();

function getAllRooms()
{
    $options = array('order_by' => 'id');
    return get_all('rooms', $options);
}
$list_rooms = getAllRooms();


function getAllDetailBooking($booking_id)
{
    $options = array(
        // 'select' => 'bookingroom.*, rooms.name AS room_name, rooms.price AS room_price',
        'where' => "bookingroom.booking_id = $booking_id",
        // 'join' => 'JOIN rooms ON bookingroom.booking_id = rooms.id'
    );
    return get_all('bookingroom', $options);
}
// if (isset($_GET['detail_booking_id'])) {
//     $id_booking = $_GET['detail_booking_id'];
//     $list_detail_booking = getAllDetailBooking($booking_id);
//     $total_money = 0;
//     foreach ($list_detail_booking as $booking) {
//         $total_money += $booking['room_price'];
//     }
// }

if (isset($_GET['detail_booking_id'])) {
    $subCateId = intval($_GET['detail_booking_id']);
    return $detailbooking = get_a_data('bookings', $subCateId);
}
function getAllRoom()
{
    $options = array('order_by' => 'id');
    return get_all('rooms', $options);
}
$list_rooms = getAllRoom();


function getBookingDetails($bookingId)
{
    $where = "id = $bookingId";
    return get_a_data('bookings', $where);
}


function addBooking($name_account, $CCCD, $tel, $payment, $address, $status)
{
    $data = array(
        'name_account' => $name_account,
        'CCCD' => $CCCD,
        'tel' => $tel,
        'payment' => $payment,
        'address' => $address,
        'status' => $status,
        'create_date' => date('Y-m-d')
    );
    return save_and_get_result('bookings', $data);
}

function addBookingRoom($booking_id, $id, $check_in, $check_out)
{
    $data = array(
        'booking_id' => $booking_id,
        'id' => $id, // của rooms
        'check_in' => $check_in,
        'check_out' => $check_out,
        'status' => 1,
        'create_date' => date('Y-m-d')
    );

    $result = save_and_get_result('bookingroom', $data);
    return $result;
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["add_booking"])) {
        $name_account = $_POST["name_account"];
        $CCCD = $_POST["CCCD"];
        $tel = $_POST["tel"];
        $payment = $_POST["payment"];
        $address = $_POST["address"];
        $status = $_POST["status"];
        $addResultBookings = addBooking($name_account, $CCCD, $tel, $payment, $address, $status);
        $rooms = isset($_POST["id"]) ? $_POST["id"] : array();
        $checkinDates = isset($_POST["checkin"]) ? $_POST["checkin"] : array();
        $checkoutDates = isset($_POST["checkout"]) ? $_POST["checkout"] : array();
        $addResultBookingsRoom = null;
        for ($i = 0; $i < count($rooms); $i++) {
            $id = $rooms[$i];
            $checkin_date = $checkinDates[$i];
            $checkout_date = $checkoutDates[$i];
            $addResultBookingsRoom = addBookingRoom($addResultBookings['lastInsertId'],  $id, $checkin_date, $checkout_date);
        }
        if ($addResultBookings && $addResultBookingsRoom) {
            header('location: listbooking.php?controller=bookingrooms');
        }
    }
}
