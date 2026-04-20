<?php
include "../config/db.php";
$sql = "SELECT * FROM students";
$data = $conn->prepare($sql);
$data->execute();
$students = $data->fetchAll();
$cnt = 1;
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Students Jadvali</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			margin: 40px;
			background-color: #f9f9f9;
		}

		h1 {
			text-align: center;
			color: #333;
		}

		.add-student-btn {
			display: inline-block;
			margin-bottom: 15px;
			padding: 10px 20px;
			background-color: #28a745;
			color: white;
			border: none;
			border_radius: 5px;
			cursor: pointer;
			text-decoration: none;
		}

		.add-student-btn:hover {
			background-color: #218838;
		}

		table {
			width:100%;
			border-collapse: collapse;
			background-color: white;
		}

		th, td {
			border: 1px solid #ddd;
			padding: 12px;
			text-align: left;
		}

		th {
			background-color: #007bff;
			color: white;
		}

		tr:nth-child(even) {
			background-color: #f2f2f2;
		}

		.action_btn {
			padding: 5px 10px;
			margin-right: 5px;
			border: none;
			border-radius: 4px;
			cursor: pointer;
			color: white;
		}

		.view-btn { background-color: #17a2b8; }
		.edit-btn { background-color: #ffc107; color: black; }
		.delete-btn { background-color: #dc3545; }

		.action-btn:hover {
			opacity: 0.8;
		}
	</style>
</head>
<body>
	<h1>Students Jadvali</h1>
	<a href="create.php" class="add-student-btn">Student qo'shish</a>

	<table>
		<thead>
			<tr>
				   <th>First Name</th>
					 <th>Last Name</th>
					 <th>Age</th>
					 <th>Class</th>
					 <th>Name</th>
					 <th>Phone</th>
					 <th>Address</th>
					 <th>Actions</th>
			</tr>
		</thead>
		<tbody>
<!-- BU YERGA DATABASEDAN MA'LUMOT KELADI -->
 <?php foreach($students as $student): ?>
			<tr>
		 <td><?= $cnt++ ?></td>
		 <td><?= $student['first_name'] ?></td>
		 <td><?= $student['last_name'] ?></td>
		 <td><?= $student['age'] ?></td>
		 <td><?= $student['class_name'] ?></td>
		 <td><?= $student['phone'] ?></td>
		 <td><?= $student['address'] ?></td>
		 <td class=""actions>
		     <a href="#" class=""view>Ko'rish</a>
		     <a href="#" class="edit">Tahrirlash</a>
		     <a href="delete.php?id=<?= $student['id'] ?>" class="delete" onclick="return confirm('O\'chirasizmi!')">O'chirish</a>
       </td>
			</tr>
			                	<?php endforeach;?>
	        	</tbody>
	         </table>
</body>
</html>