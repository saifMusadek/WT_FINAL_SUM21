<?php 
	require_once 'controllers/adminController.php';
	$allMembers = getMembers();
?>
<html>
	<head>
        <title>All Staff View</title>
		<link rel="stylesheet" href="styles/AllMembers.css" />
    </head>
    <body>

	<?php
    include 'Adminheader.php';
     include 'AdminLeftSidebar.php'; ?>
		<div class="all-members">
			<table>
			<?php
					$i=1;
					foreach($allMembers as $p){
						echo "<tr>";
							
							echo "<td>$i</td>";
							echo "<td>[".$p["name"]."]</td>";
							echo "<td>[".$p["uname"]."]</td>";
							echo "<td>[".$p["pass"]."]</td>";
                            echo "<td>[".$p["dob"]."]</td>";
                            echo "<td>[".$p["gender"]."]</td>";
							echo "<td>[".$p["email"]."]</td>";
							echo "<td>[".$p["lang"]."]</td>";
							echo "<td>[".$p["city"]."]</td>";
							echo "<td>[".$p["state"]."]</td>";
                            echo "<td>[".$p["zip_code"]."]</td>";
							echo "<td>[".$p["p_number"]."]</td>";
							echo "<td>[".$p["nid"]."]</td>";
							echo '<td><a href="AdminEditMembers.php?id='.$p["id"].'" class="btn-edit">Edit</a></td>';
							echo '<td><a href="removeMemberSuccess.php?id='.$p["id"].'" class="btn-remove">Remove</a></td>';
						echo "</tr>";
                        echo "<tr>";
                        echo "</tr>";
                        echo "<tr>";
                        echo "</tr>";
                        echo "<tr>";
                        echo "</tr>";
                        echo "</tr>";
                        echo "<tr>";
                        echo "</tr>";
                        echo "<tr>";
                        echo "</tr>";
                        echo "<tr>";
                        echo "</tr>";
                        echo "</tr>";
                        echo "<tr>";
                        echo "</tr>";
                        echo "<tr>";
                        echo "</tr>";
                        echo "<tr>";
                        echo "</tr>";
                        echo "</tr>";
                        echo "<tr>";
                        echo "</tr>";
                        echo "<tr>";
                        echo "</tr>";
                        echo "<tr>";
                        echo "</tr>";
                        echo "</tr>";
                        echo "<tr>";
                        echo "</tr>";
                        echo "<tr>";
                        echo "</tr>";
                        echo "<tr>";
                        echo "</tr>";
                        echo "</tr>";
                        echo "<tr>";
                        echo "</tr>";
                        echo "<tr>";
                        echo "</tr>";
                        echo "<tr>";
                        echo "</tr>";
                        echo "</tr>";
                        echo "<tr>";
                        echo "</tr>";
                        echo "<tr>";
                        echo "</tr>";
                        echo "<tr>";
                        echo "</tr>";
                        echo "</tr>";
                        echo "<tr>";
                        echo "</tr>";
                        echo "<tr>";
                        echo "</tr>";
                        echo "<tr>";
                        echo "</tr>";
                        
						$i++;
					}
				?>
			</table>
		</div>
    </body>
</html>