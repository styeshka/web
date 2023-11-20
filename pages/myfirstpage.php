<?php
session_start();
if (!isset($_SESSION["username"])){
    header("Location:../index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My 1st Webpage</title>
    <link rel="stylesheet" href="../css/mStyle.css">
    <link rel="stylesheet" href="../css/icons.css">
</head>
    <body>
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
            <a href="../index.php">
            <div id="logout">
               <?php echo "Welcome, ".$_SESSION['username'];?> - Logout
            </div></a>
        </div>
    </body></html>