<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StudBud</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="index_style.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="MemberHome.php">
                  <img src="pictures/harambe.jpg" alt="logo" height="8%" width="8%">
                  <strong>City Gym</strong>
              </a>
              
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="px-5" >
              <div><strong>Username:</strong> <?php echo $_COOKIE["uname"];?>  </div>
              <div><strong>ID:</strong> <?php echo $_COOKIE["id"];?> </div>
              </div>
              <div class="collapse navbar-collapse nav-gap nav justify-content-center" id="navbarNavDropdown">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="MemberHome.php">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="MemberProfile.php">Profile</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="MemberActivity.php">Activity</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="MemberNotice.php">Notice</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    More
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <li><a class="dropdown-item" href="NutritionSchedule.php">Nutrition Schedule</a></li>
                      <li><a class="dropdown-item" href="MemberWorkout.php">Work Out</a></li>
                      <li><a class="dropdown-item" href="MemberDetails.php">Details</a></li>
                      <li><a class="dropdown-item" href="MemberTotalLoggedTime.php">Subscription History</a></li>
                      <li ><a class="dropdown-item" href="LandingPage.php">Sign Out</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
        </nav>
    </header>
    <!-- JavaScript Bundle with Popper -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    
</body>
</html>