<?php
include "../config/db.php";

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$age = $_POST['age'];
$class_name = $_POST['class_name'];
$phone = $_POST['phone'];
$address = $_POST['address'];

// So'rov
$sql = "INSERT INTO students (first_name, last_name, age, class_name, phone, address)
  VALUES(?, ?, ?, ?, ?, ?)";

	// So'rov tayyorlash
	$data = $conn->prepare($sql);

// So'rovni ishga tushirish
$data->execute([$first_name, $last_name, $age, $class_name, $phone, $address]);

header("Location: index.php");

?>