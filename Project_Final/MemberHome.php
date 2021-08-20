<?php include 'MemberHeader.php';?>

<html>
    <head>
        <title>
            Member Home
        </title>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    </head>
    <script src="js/index.js"></script>
    <body>
        <h1>Member Home</h1>
        <button type="button" class="btn btn-primary" onclick="loadDoc()">Profile</button>
        <button type="button" class="btn btn-secondary" onclick="loadDoc2()" >Activity</button>
        <button type="button" class="btn btn-success" onclick="loadDoc3()">Notice</button>
        <button type="button" class="btn btn-danger" onclick="loadDoc4()">Workout</button>
        <button type="button" class="btn btn-warning"onclick="loadDoc5()">Nutrition Schedule</button>
        <div id="demo"></div>
        
    </body>
</html>