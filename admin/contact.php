<?php
session_start();
include('includes/dbconnection.php');
if (empty($_SESSION['adminid'])) {
  header('location:logout.php');
  } else
  {
   if(isset($_POST['submit']))
  {

$address=$_POST['address'];
$pagedes=$_POST['pagedes'];
$contactno=$_POST['contactno'];
$email=$_POST['email'];
echo $sql="UPDATE users SET address='".$address."', PageDescription='".$pagedes."',contactno='".$contactno."',email='".$email."' ";
$query=mysqli_query($conn, $sql);

echo '<script>alert("Contact us has been updated")</script>';


  }

  ?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>About Us</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/style.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>

    </head>
    <body class="sb-nav-fixed">
      <!-- partial:partials/_navbar.html -->
      <?php include_once('includes/navbar.php');?>
      <div id="layoutSidenav">
      <?php include_once('includes/sidebar.php');?>
      <div id="layoutSidenav_content">
         <main>
             <div class="container-fluid px-4">
       
                 <h1 class="mt-4">Contact us</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">About Us</li>
                        </ol>
                <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                                    Contact Us
                         </div>
                                <div class="card-body">
                                    <h4 class="card-title" style="text-align: center;">Update Contact Us</h4>
                                
                                    <form class="forms-sample" method="post">
                                    <?php

                                        $sql="SELECT * from  users ";
                                        $query = mysqli_query($conn, $sql);
                                        while($row=mysqli_fetch_array($query))
                                                                    {               
                                                                    ?>    
                                    <div class="form-group">
                                        <label for="exampleInputName1">Address:</label>
                                        <input type="text" name="address" value="<?php  echo $row['address'];?>" class="form-control" required='true'>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputName1">Page Description:</label>
                                        <textarea type="text" name="pagedes" class="form-control" required='true'><?php  echo $row['PageDescription'];?></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputName1">Email:</label>
                                        <input type="text" name="email" id="email" required="true" value="<?php  echo $row['email'];?>" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputName1">Mobile Number:</label>
                                        <input type="text" name="contactno" id="contactno" required="true" value="<?php  echo $row['contactno'];?>" class="form-control" maxlength="10" pattern="[0-9]+">
                                    </div>
                                    <?php }} ?>
                                    <button type="submit" class="btn btn-primary mr-2" name="submit">Update</button>
                                    
                                    </form>
                            </div>
                      </div>
              </div>
            
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
         <?php include_once('includes/footer.php');?>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="../js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="../js/datatables-simple-demo.js"></script>
    </body>
</html>
  </body>
</html>