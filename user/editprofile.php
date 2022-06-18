<?php
session_start();
include "../php/db_conn.php";

if (!(isset($_SESSION['username']) && isset($_SESSION['id']))) {
  header("Location: home.php");
}

  if (isset($_POST["submit"])){
  $fullname = $_POST["fullname"];
  $email = $_POST["email"];
  $phonenumber = $_POST["phonenumber"];
  $homenumber = $_POST["homenumber"];
  
  $photo_name = $_FILES["photo"]["name"];
  $photo_tmp_name = $_FILES["photo"]["tmp_name"];
  $photo_size = $_FILES["photo"]["size"];
  $photo_new_name = rand() . $photo_name;

  if($photo_size > 5242880) {
        echo "<script>alert('Photo is very big. Maximum photo uploading size is 5Mb. ');</script>";
    } else {
        
        if (!empty($_FILES["photo"]["name"])) {  //edit data with changing picture
          $sql = "UPDATE users SET fullname='$fullname', email='$email', phonenumber='$phonenumber', homenumber='$homenumber', photo='$photo_new_name' WHERE id='{$_SESSION["id"]}'";
          $result = mysqli_query($conn, $sql);

          if ($result) {
            echo "<script>alert('Profile updated successfully');</script>";
            move_uploaded_file($photo_tmp_name, "../uploads/" . $photo_new_name);
            header("Location: ../user/profile.php");
          } else {
            echo "<script>alert('Profile can not Updated.');</script>";
            echo  $conn->error;
          }
         
        } else { //edit data without changing picture
          $sql2 = "UPDATE users SET fullname='$fullname', email='$email', phonenumber='$phonenumber', homenumber='$homenumber' WHERE id='{$_SESSION["id"]}'";
          $result2 = mysqli_query($conn, $sql2);

          if ($result2) {
            echo "<script>alert('Profile updated successfully');</script>";
            header("Location: ../user/profile.php");
          } else {
            echo "<script>alert('Profile can not Updated.');</script>";
            echo  $conn->error;
          }
          
        }
    }
}
  ?>

  <!DOCTYPE html>
  <html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- FontAwesome  -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
    integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- icon link -->
  <link rel="icon" href="../pic/casaidaman.png" type="image/icon type">

    <!-- CSS link  -->
    <link rel="stylesheet" href="../css/main.css">

    <title>User Profile</title>
  </head>
  <body class="text-black" style="background-color:rgb(40, 38, 38);">

  <br><br><br><br>

  <header class="container">
    <nav class="navbar fixed-top navbar-expand-lg navbar-light  navigation bg-transparent   ">
        <div class="container">
            <div style="display: flex; align-items:center;">
                <a class="navbar-brand" href="../user/home.php"><img class="logo" src="../pic/casaidaman.png" width="180px"
                        alt=""></a>
                <h3 style="font-weight: 800; font-size: 24px; color: #ffffff;">Casa Idaman</h3>
            </div>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class=" navbar-toggler-icon "><i class="fas fa-bars"
                        style="color:#fff; font-size:28px;"></i></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto ">
                    <li class="nav-item navi">
                        <a class="nav-link text-white nav-list " href="../user/home.php">Home</a>
                    </li>
                    <li class="nav-item navi">
                        <a class="nav-link text-white" href="../user/faci.html">Facilities</a>
                    </li>
                    <li class="nav-item navi">
                        <a class="nav-link text-white nav-list " href="../user/visitor.html">Visitor</a>
                    </li>
                    <li class="nav-item navi">

                        <a class="nav-link text-white" href="../user/c19status.html">Covid-19 Status</a>


                    </li>
                    
                    <li class="nav-item navi">
                    
                      <a class="nav-link text-white" href="../user/profile.php"><i class="fa-solid fa-circle-user"></i>  
                      <?php
                        echo $_SESSION['username']; ?> 
                      </a>
                    
                    </li>
                    
                    <li class="nav-item navi">
                        <a class="nav-link text-white" href="../main.php">Logout</a>
                    </li>


                </ul>
            </div>
        </div>
    </nav>
  </header>

  <div class="container bootstrap snippets bootdey">
    
      <hr>
	<div class="row">
      <!-- left column -->
      <div class="col-md-3">

      <?php
      $sql = "SELECT * FROM users WHERE id='{$_SESSION["id"]}'";
      $result = mysqli_query($conn, $sql);

      if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
      
      ?>

        <div class="text-center">
          <img src="../uploads/<?php echo $row['photo']; ?>" class="avatar img-circle img-thumbnail" alt="avatar">
          <hr>
          <a class="btn" href="changeUser.php">
          <button type="edit" href="../user/changeUser.php" name="edit" class="btn" style="color: white; background-color: #008CBA;">Change Username</button>
        </a>
        <a class="btn" href="changePass.php">
          <button type="edit" href="../user/changePass.php" name="edit" class="btn" style="color: white; background-color: #008CBA;">Change Password</button>
        </a>
        </div>
        <?php }} ?>
      </div>
      
      <!-- edit form column -->
      <div class="col-md-9 personal-info">
        
        <h3 style="color:white;">Edit Personal Info</h3>
        
        <div class="card mb-3" >
            <div class="card body" style="padding:0.3cm">
        
        <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">

          <?php

          $sql = "SELECT * FROM users WHERE id='{$_SESSION["id"]}'";
          $result = mysqli_query($conn, $sql);

          if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
          
          ?>


          <div class="form-group">
            <label class="col-lg-3 control-label">Full Name:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" value="<?php echo $row['fullname']; ?>" name="fullname" id="fullname">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Email:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" value="<?php echo $row['email']; ?>" name="email" id="email">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Phone Number:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" value="<?php echo $row['phonenumber']; ?>" name="phonenumber" id="phonenumber">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Home Number:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" value="<?php echo $row['homenumber']; ?>" name="homenumber" id="homenumber">
            </div>
          </div>
          
          <br>
          <div class="form-group">
            <label for="photo">Photo: </label>
            <input type="file" accept="image/*" id="photo" name="photo">
            </div>
            <br>
          <div class="row">
            <div class="col-sm-12">
              <button type="submit" href="profile.php" name="submit" class="btn" style="color: white; background-color: #008CBA;">Save Changes</button>
            </div>
          </div>
          <?php }} ?>
        </form>
    </div>
  </div>
      </div>
  </div>
  </div>
  <hr>
  <!-- footer section starts  -->

  <section class="footer">

  <div class="share">
    <a href="https://www.facebook.com/groups/casaidamangroup" class="fab fa-facebook-f"></a>
    <a href="https://twitter.com/casaidaman" class="fab fa-twitter"></a>
    <a href="https://www.instagram.com/my.casa.idaman/" class="fab fa-instagram"></a>
    <a href="#" class="fab fa-linkedin"></a>
    <a href="#" class="fab fa-pinterest"></a>
  </div>

  <div class="links">
    <a href="../user/home.html">home</a>
    <a href="../user/faci.html">facilities</a>
    <a href="../user/visitor.html">visitor</a>
    <a href="../user/covid-19 status.html">covid-19 status</a>
    <a href="../user/profile.html">Profile</a>

  </div>

  <div class="credit">Created by <span>Web Programming Team 4</span> | all rights reserved</div>

  </section>

  <!-- footer section ends -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
  </body>
  </html><?php 
  
  
