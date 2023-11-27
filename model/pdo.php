<?php
// connect database
function pdo_get_connection()
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    try {
        $conn = new PDO("mysql:host=$servername;dbname=duan1", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch (PDOException $e) {
        echo "Lỗi dữ liệu: " . $e->getMessage();
    }
}




//lấy ra list danh sách
function get_all($table, $options = array())
{
    $conn = pdo_get_connection();
    if ($conn === null) {
        return array();
    }
    $select = isset($options['select']) ? $options['select'] : '*';
    $where = isset($options['where']) ? 'WHERE ' . $options['where'] : '';
    $order_by = isset($options['order_by']) ? 'ORDER BY ' . $options['order_by'] : '';
    $limit = isset($options['offset']) && isset($options['limit']) ? 'LIMIT ' . $options['offset'] . ',' . $options['limit'] : '';
    $join = isset($options['join']) ? $options['join'] : '';

    try {
        $sql = "SELECT $select FROM `$table` $join $where $order_by $limit";
        $query = $conn->query($sql);
        $data = array();
        if ($query) {
            while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
                $data[] = $row;
            }
        }
        return $data;
    } catch (PDOException $e) {
        return array();
    }
}
//lấy ra list danh sách theo id
function get_a_data($table, $id, $select = '*')
{
    $conn = pdo_get_connection();
    $sql = "SELECT $select FROM `$table` WHERE id=:id";
    try {
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
    $data = $stmt->fetch(PDO::FETCH_ASSOC);
    return $data;
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
//cua a
function get_a_dataa($table, $options, $where) {
    try {
        $conn = pdo_get_connection();
        $sql = "SELECT {$options['select']} FROM `$table` WHERE $where";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $data = $stmt->fetch(PDO::FETCH_ASSOC);
        return $data !== false ? $data : false;
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
        return false;
    }
}

//insert dữ liệu
function save_and_get_result($table, $data = array())
{
    $conn = pdo_get_connection();
    if ($conn === null) {
        return "Error: Unable to connect to the database.";
    }

    // Check if id_service is an array and convert it to a string
    if (isset($data['id_service']) && is_array($data['id_service'])) {
        $data['id_service'] = implode(',', $data['id_service']);
    }

    $keys = array_keys($data);
    $columns = implode(',', $keys);
    $placeholders = ':' . implode(',:', $keys);
    try {
        $stmt = $conn->prepare("INSERT INTO `$table`($columns) VALUES($placeholders)");
        // echo "INSERT INTO `$table` ($columns) VALUES ($placeholders)";die;
        $stmt->execute($data);
       
        $lastInsertId = $conn->lastInsertId();
        return array(
            'success' => true,
            'lastInsertId' => $lastInsertId
        );
    } catch (PDOException $e) {
        return "Error: " . $e->getMessage();
    }
}
//update dữ liệu
function update_data($table, $data = array(), $where)
{
    $conn = pdo_get_connection();

    if ($conn === null) {
        return "Error: Unable to connect to the database.";
    }

    $setClause = '';
    foreach ($data as $key => $value) {
        $setClause .= "`$key`=:$key,";
    }
    $setClause = rtrim($setClause, ',');

    try {
        // echo "UPDATE `$table` SET $setClause WHERE $where";die;
        $stmt = $conn->prepare("UPDATE `$table` SET $setClause WHERE $where");
        
        $stmt->execute($data);
        return true; // Success
    } catch (PDOException $e) {
        return "Error: " . $e->getMessage(); // Failure with error message
    }
}
//xóa dữ liệu 
function delete_data($table, $where)
{
    $conn = pdo_get_connection();

    if ($conn === null) {
        return "Error: Unable to connect to the database.";
    }

    try {
        $stmt = $conn->prepare("DELETE FROM `$table` WHERE $where ");
        $stmt->execute();
        return true; // Success
    } catch (PDOException $e) {
        return "Error: " . $e->getMessage(); // Failure with error message
    }
}
