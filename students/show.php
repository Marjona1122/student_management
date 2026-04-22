<?php
include "../config/db.php";
$id = $_GET['id'];
$sql = "SELECT * FROM students WHERE id = ?";
$data = $conn->prepare($sql);
$data->execute([$id]);
$student = $data->fetch();   ?>
<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <title>Student Info</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #e3f2fd, #ffffff);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .card {
            background: white;
            width: 350px;
            padding: 25px;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
            text-align: center;
        }

        .card h2 {
            margin-bottom: 20px;
            color: #1976d2;
        }

        .info {
            text-align: left;
            margin-top: 15px;
        }

        .info p {
            margin: 10px 0;
            font-size: 16px;
        }

        .label {
            font-weight: bold;
            color: #555;
        }

        .btn {
            margin-top: 20px;
            display: inline-block;
            padding: 10px 20px;
            background: #1976d2;
            color: white;
            text-decoration: none;
            border-radius: 8px;
            transition: 0.3s;
        }

        .btn:hover {
            background: #0d47a1;
        }
    </style>
</head>
<body>

<div class="card">
    <h2>Student Info</h2>

    <div class="info">
        <p><span class="label">First Name:</span> <?= $student['first_name']?></p>
        <p><span class="label">Last Name:</span> <?= $student['last_name']?></p>
        <p><span class="label">Age:</span> <?= $student['age']?></p>
        <p><span class="label">Phone:</span> <?= $student['phone']?></p>
        <p><span class="label">Address:</span> <?= $student['address']?></p>
    </div>

    <a href="index.html" class="btn">⬅ Back</a>
</div>

</body>
</html>