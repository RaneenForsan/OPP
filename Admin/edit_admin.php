<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="CSS/style.css">
</head>
<body>
    
   
 <?php
include 'includes/Adminclass.php';
 $adminObj = new Admin(); 

  // Edit admin record
  if(isset($_GET['editId']) && !empty($_GET['editId'])) {
    $editId = $_GET['editId'];
    $admin = $adminObj->displyaRecordById($editId);
  }

  // Update Record in admin table
  if(isset($_POST['edit'])) {
    $adminObj->updateRecord($editId);
  }

  ?>
  
      
<div class="sidebar">
  <a class="active" href="#home">Dashboard</a><br>
  <a href="admin.php">Manage Admins</a>
  <a href="customer.php">Manage Customers</a>
  <a href="categorize.php">Manage Categorize</a>
  <a href="product.php">Manage Product</a>
    <a href="logout.php">Logout</a>

</div>

<div class="content">
  <br><br><br><br><form action="" method="post" enctype="multipart/form-data">
    <center><h1>Edit  Admins Info</h1></center>
    <br><label for="email">Admin Email</label>
    <input type="email" id="email" name="email" placeholder="Your Email" value="<?php echo $admin['admin_email']?>">

    <br><label for="password">Admin Password</label>
    <input type="password" id="password" name="password" placeholder="Admin Password" value="<?php echo $admin['admin_password']?>">

    <br><label for="text">Admin Full Name</label>
    <input type="text" id="text" name="text" placeholder="Admin Full name" value="<?php echo $admin['admin_fullname']?>">

    <br><label for="text">Admin image</label>
    <input type="file" id="image" name="admin_image" placeholder="Admin image" value="<?php echo $admin['admin_image']?>">
  
    <input type="submit" value="Update" id="submit" style="background:#15317E" name="edit">
  </form>
    <br><br>

</div>

</body>
</html>