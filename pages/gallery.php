<?php
session_start();
if (!isset($_SESSION["username"])) {
  header("location:../index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
            Gallery
        </title>
        <link rel="stylesheet" href="../css/mStyle.css">
        <link rel="stylesheet" href="../css/icons.css">
        <link rel="stylesheet" href="../css/images.css">
</head>
<body>
    
</body>
        <div class="row right-content" id="header">
            <div id="dropdown-menu">
                <span>MENU<i class="ico burger-ico"></i></span>
                <div class="dropdown-content  menu-rtl">
                    <ul>
                        <a href="index.php">
                            <li>Main Page<i class="ico ico-l user-ico"></i></li>
                        </a>
                        <a href="cv.php">
                            <li>CV<i class="ico ico-l wallet-ico"></i></li>
                        </a>
                        <a href="gallery.php">
                            <li>Gallery<i class="ico ico-l gallery-ico"></i></li>
                        </a>
                        <a href="contact.php">
                            <li><i class="ico ico-l phone-ico"></i>Contact</li>
                        </a>
                    </ul>
                </div>
            </div>
        </div>
        <div class="content">
            <h1 style="    border: 1px solid black;
                        text-align: center;
                        padding-top: 20px;
                    ">
                Gallery
            </h1>    
        </div>
        <div class="gallery">
   
            <label for="img1">
                <img src="../images/1.jpg" class="my-img">
            </label>
            <input type="checkbox" id="img1" class="image-checkbox">
            <div class="image-popup">
                <a href="gallery.php"><img src="../images/1.jpg"></a>
            </div>
        
       
            <label for="img2">
                <img src="../images/2.jpg" class="my-img">
            </label>
            <input type="checkbox" id="img2" class="image-checkbox">
            <div class="image-popup">
                <a href="gallery.php"><img src="../images/2.jpg"></a>
            </div>
      


      
            <label for="img3">
                <img src="../images/3.jpg" class="my-img">
            </label>
            <input type="checkbox" id="img3" class="image-checkbox">
            <div class="image-popup">
                <a href="gallery.php"><img src="../images/3.jpg"></a>
            </div>

    </body>
</html>