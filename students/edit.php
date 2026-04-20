<?php
include "../config/db.php";
$id = $_GET['id'];
$sql = "SELECT * FROM students WHERE id = ?";
$data = $conn->prepare($sql);
$data->execute([$id]);
$student = $data->fetchAll();
$cnt= 1;
?>

<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <title>Studentni tahrirlash</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #667eea, #764ba2);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background: #fff;
            padding: 25px;
            border-radius: 15px;
            width: 380px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        input, textarea {
            width: 100%;
            padding: 10px;
            margin: 7px 0;
            border-radius: 8px;
            border: 1px solid #ccc;
            outline: none;
            transition: 0.3s;
        }

        input:focus, textarea:focus {
            border-color: #667eea;
        }

        textarea {
            resize: none;
            height: 80px;
        }

        button {
            width: 100%;
            padding: 12px;
            margin-top: 10px;
            background: #667eea;
            border: none;
            color: white;
            border-radius: 10px;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background: #5a67d8;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>🎓 Student qo‘shish</h2>

    <form action="store.php" method="POST">

			  <label for="first_name">Ism</label>
        <input type="text" id="first_name" value="<?= $student ['first_name']?>" name="first_name"  required>

				<label for="last_name">Familya</label>
        <input type="text" id="last_name" value="<?= $student ['last_name']?>" name="last_name" required>

        <label for="age">Yosh</label>
        <input type="number" id="age" value="<?= $student ['age']?>" name="age"  required>
        
				<label for="class_name">Sinf</label>
        <input type="text" id="class_name" value="<?= $student ['class_name']?>" name="class_name"  required>

				<label for="phone">Telefon</label>
        <input type="text" id="phone" value="<?= $student ['phone']?>"placeholder="+998..." required>

        <label for="adress">Manzil</label>
        <textarea id="adress" value="<?= $student ['adress']?>" rows="3" required></textarea>

        <button type="submit">Saqlash</button>
    </form>
</div>

</body>
</html>