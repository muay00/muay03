<?php

include('config.php');

if(isset($_POST['summit'])) {
    ///   9
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $district = $_POST['district'];
    $city = $_POST['city'];
    $province = $_POST['province'];
    $number = $_POST['number'];
    $postalcode = $_POST['postalcode'];
    $date = $_POST['date'];
    
    $firstname1 = $_POST['firstname1'];
    $lastname1 = $_POST['lastname1'];
    $username1 = $_POST['username1'];
    $district1 = $_POST['district1'];
    $city1 = $_POST['city1'];
    $province1 = $_POST['province1'];
    $number1 = $_POST['number1'];
    $postalcode1 = $_POST['postalcode1'];
    $date1 = $_GET_POST['date1'];
    }
//ไฟล์สำหรับเพิ่มข้อมูลในตาราง
$query = $dbcon->prepare ("INSERT INTO `form`(`name_1`, `lastname1`, `address_1`, `district_1`, `city_1`, `province_1`, `number_1`, `postalcode_1`, `date_1`, `name_2`, `lastname2`, `address_2`, `district_2`, `city_2`, `province_2`, `number_2`, `postalcode_2`, `date_2`)
VALUES ('$firstname','$lastname','$username','$district','$city','$province','$number','$postalcode','$date','$firstname1','$lastname1','$username1','$district1','$city1','$province1','$number1','$postalcode1','$date1')"); 

$result = $query->execute();

if($result){
    echo"<script>
            alert('เพิ่มข้อมูลเรียบร้อย');
            window.location= 'select.php';
          </script>";
}  else{
    echo"<script>alert('มีบางอย่างผิดพลาด');</script>";
} 

//window.location= 'sclect.php';
?>

