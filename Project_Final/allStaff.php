<?php 
	require_once 'controllers/adminController.php';
	$allStaffs = getStaff();
?>
<html>
	<head>
        <title>All Staff View</title>
		<link rel="stylesheet" href="styles/AllStaff.css" />
    </head>
    <body>
	<?php include 'Adminheader.php';
	include 'AdminLeftSidebar.php'; ?>
		<div class="all-staff">
			<table>
			<?php
					$i=1;
					foreach($allStaffs as $p){
						echo "<tr>";
							
							echo "<td>$i</td>";
							echo "<td><img src='".$p["resume"]."' width='100px' height='100px'></td>";
							echo "<td>[".$p["name"]."]</td>";
							echo "<td>[".$p["uname"]."]</td>";
							echo "<td>[".$p["pass"]."]</td>";
							echo "<td>[".$p["email"]."]</td>";
							echo "<td>[".$p["lang"]."]</td>";
							echo "<td>[".$p["city"]."]</td>";
							echo "<td>[".$p["state"]."]</td>";
							echo "<td>[".$p["p_number"]."]</td>";
							echo "<td>[".$p["nid"]."]</td>";
							echo '<td><a href="AdminEditProfile.php?id='.$p["id"].'" class="btn-edit">Edit</a></td>';
							echo '<td><a href="removeStaffSuccess.php?id='.$p["id"].'" class="btn-remove">Remove</a></td>';
						echo "</tr>";
						$i++;
					}
				?>
			</table>
		</div>
    </body>
</html>