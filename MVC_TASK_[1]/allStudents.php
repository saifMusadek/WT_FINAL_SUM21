<?php
	require_once 'controllers/StudentController.php';
	$students = getStudents();
?>

<html>
    <head>
        <title>allStudents</title>
    </head>
    <body>
        <h1>All Students</h1>
        <table>
		<thead>
            <th>Sl No.</th>
			<th>ID</th>
			<th>Name</th>
			<th>DOB</th>
			<th>Credit</th>
			<th>Cgpa</th>
			<th>Depid</th>
		</thead>
		<tbody>
			<?php
				$i=1;
				foreach($students as $s){
					echo "<tr>";
                        echo "<td>".$i."</td>";
                        echo "<td>".$s["id"]."</td>";
						echo "<td>".$s["name"]."</td>";
						echo "<td>".$s["dob"]."</td>";
						echo "<td>".$s["credit"]."</td>";
						echo "<td>".$s["cgpa"]."</td>";
                        echo "<td>".$s["deptid"]."</td>";
						
					echo "</tr>";
					$i++;
				}
			?>
		</tbody>
	</table>
    </body>
</html>