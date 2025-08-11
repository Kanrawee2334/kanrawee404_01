<?php
require_once'W07_01_connectDB.php';

$sql = "SELECT *FROM products";

$result = $conn ->query($sql);  //ใช้ query() เพื่อรันคำสั่ง

//ตรวจสอบว่ามีผลลัพธ์หรือไม่

if($result->rowCount() > 0){
    //outputn data of each row
   // echo "<h2> พบ ข้อมูลในตาราง Product </h2>";

    //$data = $result -> fetchAll(PDO :: FETCH_NUM);
    //$data = $result -> fetchAll(PDO :: FETCH_ASSOC);
    //$data = $result -> fetchAll(PDO :: FETCH_BOTH);


    //print_r($data);

    //echo "$data[0][0] <br>";

//=====================================================================================================================       
    //ใข้ prepared statement  เพื่อป้องกัน SQL injection
    //ใช้ execute() เพื่อสร้างคำสั่ง SQL
    // ใช้ print() เพื่อแสดงข้อมูลทั้งหมดในรูปแบบ array

    $stmt = $conn-> prepare($sql);
    $stmt->execute();
    $data = $stmt -> fetchAll(PDO :: FETCH_NUM);

    //echo "<br>";
   // echo "<pre>";
     //($data);
    //echo "/<pre>";

//echo "====================================================================================================================  ";
    $stmt = $conn-> prepare($sql);
    $stmt->execute();
    $data = $stmt -> fetchAll(PDO :: FETCH_ASSOC);

    //echo "<br>";
    //echo "<pre>";
     //print_r($data);
    //echo "/<pre>";

    // แสดงผลข้อมูลที่ดึงมา
        header('Content-Type: application/json'); // ระบุ Content-Type เป็น JSON
        echo json_encode($data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT); // แปลงข้อมูลใน $arr เป็น JSON และแสดงผล


}else{
    echo "0 results";
    echo "<h2> ไม่พบ ข้อมูลในตาราง Product </h2>";
}

?>
<a href="Index.php">Home</a>