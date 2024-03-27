<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  <link rel="stylesheet" href="styles.css">
  <title>Document</title>
</head>
<body>
  <div class="nav-bar">
    <h3>Ankush Music</h3>
    <div class="main-menu">
      <span class="menuBtn" onclick="openMenu()"><ion-icon name="menu-outline"></ion-icon></span>
      <span class="closeBtn" onclick="closeMenu()"><ion-icon name="close-outline"></ion-icon></span>
      <ul id="menu">
        <li><a href="index.html">Home</a></li>
        <li><a href="about.html">About</a></li>
        <li><a href="classes.html">Music Classes</a></li>
        <li><a href="contact.html">Contact</a></li>
        <li><a href="login.html">Login</a></li>
      </ul>
    </div>
  </div>
  <div class="container-fluid bg-secondary text-white text-center">
  <h1>Form data of students.</h1> 
</div>
<div class="container-fluid mt-3">            
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Sr. No.</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
        <th>Mobile</th>
        <th>Country</th>
        <th>Gender</th>
      </tr>
    </thead>
    <tbody>
      <?php
            include('connection.php');
            $query1 = mysqli_query($con, "select * from details");
            while ($row = mysqli_fetch_array($query1));
      ?>
      <tr>
        <td></td>
        <td><?php echo $row['fname'];?></td>
        <td><?php echo $row['lname'];?></td>
        <td><?php echo $row['email'];?></td>
        <td><?php echo $row['mobile'];?></td>
        <td><?php echo $row['country'];?></td>
        <td><?php echo $row['gender'];?></td>
      </tr>
    </tbody>
  </table>
</div>
</body>
<script src="data/index.js"></script>
</html>