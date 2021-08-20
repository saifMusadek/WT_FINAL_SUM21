<?php
session_start();
require_once 'controllers/resumeController.php';
?>
<html>
  <head>
  <link rel="stylesheet" href="styles/Resumes.css" />
  <title>All Staff Resumes</title>
  </head>
  <body>
    <?php include"Adminheader.php";?>
    <?php include "AdminLeftSidebar.php";?>
    <div class="resume-parent"> <!-- flex create column -->
      <form accept="" method="post" enctype="multipart/form-data">
        <div class="resume-child1 row1"><!--column flex1 and flex create (row) -->
          <div class="resume-coc1"><p><strong>Enter the ID of the Staff:</strong></p></div> <!-- row 1 -->
          <div class="resume-coc2"><input type="text" name="staffId"></div><!-- row 2 -->
          <div class="resume-coc3"><input type="submit" name="btn-resume" value="submit"></div><!-- row 3-->
          <div class="resume-coc4"> <span><?php echo $err_staffId; ?></span></div><!-- row 4-->
        </div>
        <div class="resume-child2 row2"> <!--column flex2 and flex create (row) -->
          <div class="resume-Pic">
            <?php 
              echo "<img class='resume-pic'  src='".$_SESSION["url"]."' />";
            ?> 
          </div>    
        </div>   
      </form>
    </div>
    
  </body>
</html>
