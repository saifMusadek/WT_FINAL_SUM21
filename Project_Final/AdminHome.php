<?php 
$totalMembers = 50;
$totalStaffs = 30;
$totalProfit = '30%';
$totalLoss = '10%';
?>
<?php $title = "demo";?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="styles/dashboard.css" />
    <title>Document</title>
  </head>
  
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>

<body>
  <?php include'Adminheader.php';?>
  <?php include'AdminLeftSidebar.php';?>
  <div class="home">
    <section class="container my-5 py-5 ">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
          <div class="col">
            <div class="card h-100 border-0 shadow-lg rounded-3">
              <div class="card-body">
                <h3 class="card-title">Members</h5>
                  <p class="card-text">The total number of members are estimated to be increased by 45% over the course of five months due to lifting of covid restrictions </p>
                </div>

              </div>
            </div>
            <div class="col">
                <div class="card h-100 border-0 shadow-lg rounded-3">
                    <div class="card-body">
                        <h3 class="card-title">Trainers</h5>
                            <p class="card-text">The overall trainer capacity is 15 person which is not enough for the increasing amount of members. More female trainers must be recruited for female members</p>
                    </div>

                </div>
            </div>
            <div class="col">
                <div class="card h-100 border-0 shadow-lg rounded-3">
                    <div class="card-body">
                        <h3 class="card-title">Covid Rules</h5>
                            <p class="card-text">The covid guidelines are being followed throughly and the gym is expected to have a health inspection over the course of next month.</p>
                    </div>

                </div>
            </div>
            <div class="col">
                <div class="card h-100 border-0 shadow-lg rounded-3">
                    <div class="card-body">
                        <h3 class="card-title">Budget</h5>
                            <p class="card-text">An ample amount of expenditure needs to be kept aside for broken gym equipments as they need maintanence every month due to their long run.</p>
                    </div>

                </div>
            </div>

        </div>
        
    </section>
    </div>
    <!-- javascript bundle -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </div>
</body>

</html>
