<?php include "../db_conn.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="blogpage.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
</head>
<body>

    <div class="header">
        <a href="#default" class="logo">POST IT!!</a>
        <div class="header-right">
          <a class="active" href="#home">Home</a>
          <a href="#contact">Contact</a>
          <a href="#about">About</a>
          <a href="#about">Login</a>
        </div>
      </div>

    <section class="blog-page">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="blog-item">
                        
                        <div class="down-content">
                            
                            <?php 
                                $sql = "SELECT * FROM images ORDER BY id DESC";
                                $res = mysqli_query($conn,  $sql);

                                if (mysqli_num_rows($res) > 0) {
                                    while ($images = mysqli_fetch_assoc($res)) {  ?>
                                    
                                        <h4> <?= $images['title']?></h4>
                                        <p><?= $images['description'] ?> </p>
                                        <img src="../uploads/<?=$images['image_url']?>">
                                        
                                    </div>
                                        
                            <?php } }?>
                        </div>
                    </div>
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