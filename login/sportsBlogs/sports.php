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
        a{
            color:white;
            text-decoration:none;
            font-size: 30px;
        }
    </style>
</head>
<body>

    <div class="header">
        <a href="#default" class="logo">POST IT!!</a>
        <div class="header-right">
          <a class="active" href="../userSide/index.html">Home</a>
          <a href="../userSide/contact.html">Contact</a>
          <a href="../userSide/about.html">About</a>
          
        </div>
      </div>

      <section class="banner">
        <div class="container">
            <div class="row">
                <div class="d-flex flex-column">
                    <div class="p-2"><h4>Start Learning today...</h4></div>
                    <div class="p-2"><h2>Educational Blogs</h2></div>
                    <div class="p-2"><button class="btn btn-primary"><a href="./add_sp.php" >ADD BLOG</a></button></div>
                  </div>
                  
            </div>
        </div>
    </section>

    <section class="blog-page">
        <div class="container">
            <div class="row  row-cols-2">
            <?php 
                $sql = "SELECT * FROM spblog ORDER BY id DESC";
                $res = mysqli_query($conn,  $sql);

                if (mysqli_num_rows($res) > 0) {
                    while ($info = mysqli_fetch_assoc($res)) {  
            ?>
                <div class="col">
                    <div class="blog-item">
                    <img src="uploads/<?=$info['image_url']?>">
                        
                        <div class="down-content">
                            <h4> <?= $info['title']?></h4>
                           
                            <p><?= $info['description'] ?></p>
                            <div class="text-button">
                                <a href="blogpost.html">Continue Reading</a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } }?>
                
            </div>
        </div>
    </section>

     


      <div class="footer-basic">
        <footer>
            <div class="social"><a href="#"><i class="icon ion-social-instagram"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-facebook"></i></a></div>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="#">Home</a></li>
                <li class="list-inline-item"><a href="#">Services</a></li>
                <li class="list-inline-item"><a href="#">About</a></li>
                <li class="list-inline-item"><a href="#">Terms</a></li>
                <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
            </ul>
            <p class="copyright">Company Name © 2018</p>
        </footer>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>