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
        .heading-card {
  background-color: #f2f2f2;
  padding: 15px;
  margin-bottom: 20px;
  border-radius: 8px;
  text-align: center;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}
                .blog-table {
        width: 100%;
        border-collapse: collapse;
        }

        .blog-table th, .blog-table td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
        }

        .blog-table th {
        background-color: #f2f2f2;
        }

        .blog-table tbody tr:nth-child(even) {
        background-color: #f9f9f9;
        }

        .blog-table tbody tr:hover {
        background-color: #f1f1f1;
        }

        .delete-btn {
        background-color: #ff0000;
        color: #fff;
        border: none;
        padding: 6px 10px;
        border-radius: 4px;
        cursor: pointer;
        }
    </style>
</head>
<body>
    
  <div class="header">
    <a href="#default" class="logo">POST IT!!</a>
    <div class="header-right">
    <a class="active" href="dashboard.php">Home</a>
      <a  href="education.php">Educational</a>
      <a href="sports.php">Sports</a>
      <a href="entertainment.php">Entertainment</a>
      
    </div>
  </div>


      <div class="heading-card">
        <h1>Educational Blogs</h1>
        <h2>Total Entries: 3</h2>
      </div>


      <table class="blog-table">
        <thead>
          <tr>
            <th>Blog Title</th>
            <th>Description</th>
            <th>Image URL</th>
            <th>Delete</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>First Blog</td>
            <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</td>
            <td>https://example.com/image1.jpg</td>
            <td><button class="delete-btn">Delete</button></td>
          </tr>
          <?php 
                $sql = "SELECT * FROM spblog";
                $res = mysqli_query($conn,  $sql);

                if (mysqli_num_rows($res) > 0) {
                    while ($info = mysqli_fetch_assoc($res)) {  
            ?>
          <tr>

            <td> <?= $info['title']?></td>
            <td> <?= $info['description']?></td>
            <td> <?= $info['image_url']?></td>
            <td><button class="delete-btn">Delete</button></td>
          </tr>
          <?php } }?>
        </tbody>
      </table>
     

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>