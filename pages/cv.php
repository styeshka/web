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
    <title>
            CV
        </title>
        <link rel="stylesheet" href="../css/mStyle.css">
        <link rel="stylesheet" href="../css/icons.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
            integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="../css/style.css">
</head>
    <body>
        <div class="row center-content" id="header">
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
        <div class="container">
            <div class="profileText">
                <div class="imgBx">
                    <img src="imgs/photo_2023-09-24_21-31-20.jpg">
                    <h2>Stephania Abdallah<br><span>Web Developer</span></h2>
                </div>
                <div class="contactInfo">
                    <h3 class="title">Contact Info</h3>
                    <ul>
                        <li>
                            <span class="icon"><i class="fa fa-phone" aria-hidden="true"></i></span>
                            <a href="tel:+961 81 889 979" class="text">+961 81 889 979</a>
                        </li></span>
                        <li>
                            <span class="icon"><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
                            <span class="text">stephaniaabdallah25@gmail.com</span>
                        </li>
                        <li>
                            <span class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                            <span class="text">Lebanon, Mount Liban</span>
                        </li>
                    </ul>
                </div>
                <div class="contactInfo education">
                    <h3 class="title">Education</h3>
                    <ul>
                        <li>
                            <h5>2021-2023</h5>
                            <h4>BS in Bioinformatics</h4>
                            <h4>Lebanese American University</h4>
                        </li>
                    </ul>
                </div>
                <div class="contactInfo language">
                    <h3 class="title">Langauges</h3>
                    <ul>
                        <li>
                            <div class="box">
                                <span class="text">English</span>
                            </div>
                        </li>
                        <li>
                            <div class="box">
                                <span class="text">Russian</span>
                            </div>
                        </li>
                        <li>
                            <div class="box">
                                <span class="text">Arabic</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="right_Side">
                <div class="about">
                    <h2 class="title2">Profile</h2>
                    <p>Hey,I'm a Junior Bioinformatics student, currently working on improving my web development skills, and solving codewars challenges in freee time.Feel free to contact me:)</p>
                </div>
                <div class="about">
                    <h2 class="title2">Experience</h2>
                    <div class="box">
                        <div class="year_place">
                            <h5>To be added yet</h5>
                        </div>
                    </div>
                </div>
                <div class="about skills">
                    <h2 class="title2">Proffessional Skills</h2>
                    <div class="box">
                        <h4>Html</h4>
                        <div class="percent">
                            <div style="width: 15%;"></div>
                        </div>
                    </div>
                    <div class="box">
                        <h4>Python</h4>
                        <div class="percent">
                            <div style="width: 75%;"></div>
                        </div>
                    </div>
                    <div class="box">
                        <h4>Java</h4>
                        <div class="percent">
                            <div style="width: 20%;"></div>
                        </div>
                    </div>
                </div>
                <div class="about softskills">
                    <h2 class="title2">Soft Skills</h2>
                    <ul>
                        <li>
    
                            communication
                        </li>
                        <li>
                            teamwork
                        </li>
                        <li>
    
                            adaptability
                        </li>
                        <li>
                            critical
                            thinking
                        </li>
                    </ul>
    
                </div>
    
            </div>
        </div>
            <a href="../index.php">
            <div id="logout">
            <?php echo "Welcome, ".$_SESSION['user'];?> - Logout
            </div></a>
        </div>
        </body>
</html>