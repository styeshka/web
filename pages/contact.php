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
            Contact
        </title>
        <link rel="stylesheet" href="../css/mStyle.css">
        <link rel="stylesheet" href="../css/icons.css">
</head>
<body>
        <div class="row" id="header">
            <div id="dropdown-menu">
                <span><i class="ico burger-ico"></i>MENU</span>
                <div class="dropdown-content">
                    <ul>
                        <a href="index.php">
                            <li><i class="ico ico-l user-ico"></i>Main Page</li>
                        </a>
                        <a href="cv.php">
                            <li><i class="ico ico-l wallet-ico"></i>CV</li>
                        </a>
                        <a href="gallery.php">
                            <li><i class="ico ico-l gallery-ico"></i>Gallery</li>
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
                Contact
            </h1>
            <h2>Contact Information:</h2>
            <ul>
                <li>Name: Stephania Abdallah</li>
                <li>Email: stephania.abdallah@lau.edu</li>
                <li>Number: +961 81 889 979</li>
            </ul>
        </div>
        </div>
            <a href="../index.php">
            <div id="logout">
            <?php echo "Welcome, ".$_SESSION['user'];?> - Logout
            </div></a>
        </div>
    </body>
</html>