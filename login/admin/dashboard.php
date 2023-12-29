<?php include "db_co.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../style/blogpage.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <style>
        .user-table {
  width: 100%;
  border-collapse: collapse;
}

.user-table th, .user-table td {
  border: 1px solid #ddd;
  padding: 8px;
  text-align: left;
}

.user-table th {
  background-color: #f2f2f2;
}

.user-table tbody tr:nth-child(even) {
  background-color: #f9f9f9;
}

.user-table tbody tr:hover {
  background-color: #f1f1f1;
}
    </style>
</head>
<body>
    
<div class="header">
    <a href="#default" class="logo">POST IT!!</a>
    <div class="header-right">
      
      <a class="active" href="education.php">Educational</a>
      <a href="sports.php">Sports</a>
      <a href="entertainment.php">Entertainment</a>
      
    </div>
  </div>


      <div class="container">
        <div class="row">
          <div class="col-sm">
            
            <div class="card" style="width: 18rem;">
                <img src="img/man.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text display-6">Total Users</p>
                    <p class="card-text display-6">382+</p>
                    
                </div>
            </div>
          </div>
          <div class="col-sm">
            
            <div class="card" style="width: 18rem;">
                <img src="img/man.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text display-6">Total Users</p>
                    <p class="card-text display-6">382+</p>
                    
                </div>
            </div>
          </div>
          <div class="col-sm">
            <div class="card" style="width: 18rem;">
                <img src="img/man.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text display-6">Total Users</p>
                    <p class="card-text display-6">382+</p>
                    
                </div>
            </div>
          </div>
        </div>
      </div>

     <!-- Table -->
      <div class="display-3"> USER's INFO</div>
     <table class="user-table">
        <thead>
          <tr>
            <th>UID</th>
            <th>Username</th>
            <th>Password</th>
            <th>Country</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>JohnDoe</td>
            <td>********</td>
            <td>USA</td>
          </tr>
          <?php 
                $sql = "SELECT * FROM users";
                $res = mysqli_query($conn,  $sql);

                if (mysqli_num_rows($res) > 0) {
                    while ($info = mysqli_fetch_assoc($res)) {  
            ?>
          <tr>
            <td> <?= $info['uid']?></td>
            <td> <?= $info['uname']?></td>
            <td> <?= $info['upass']?></td>
            <td> <?= $info['ucountry']?></td>
            
          </tr>
          <?php } }?>
        </tbody>
      </table>
     

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>