<?php
require_once dirname(__FILE__) . "/../views/login_status.php";
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Yu-Chi's Personal Website</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, ">
        <link href="chi.CSS" rel="stylesheet" type="text/css"> <!--type="text/css"若省略，則假設它是CSS樣式表-->
        <link href="goldensnitch.ico" rel="icon" type="image/x-icon"/> <!--網頁分頁名稱旁的小圖案-->
    </head>
    <body>
        <header>
            Yu-Chi Chen's Personal Website
        </header>
        <nav>
            <ul class="navigator">
                <li><a href="#">Home</a></li>
                <li><a href="#">Resume</a></li>
                <li><a href="#">CV</a></li>
                <div class="dropdown">
                <li>
                    <a href="#">Side Project</a>
                    <div class="dropdownmenu">
                        <a href="#">Database Project</a>
                        <a href="note.html">My Note</a>
                    </div>
                </li>
                </div>
                <div class="dropdown">
                <li>
                    <a href="/php_project_demo/personal_website/index.php">Log Out</a>
                    <div class="dropdownmenu">
                        <a href="../views/password_changing.php">Change Password</a>
                    </div>
                </li>
                </div>
            </ul>
        </nav>
        <main>
            <div class="photo_frame"><img class="photo_org" src="chi.jpg" alt="Yu-Chi's Photo"></div>
            <div class="intro">
                <p>
                    <div class="main_title">About Me</div>
                    <div class="main_cont">
                        <ul>
                            <li>My Name：Yu-Chi Chen</li>
                            <li>Age：19</li>
                            <li>Language：English, Mandarin</li>
                            <li>Education：National Yang Ming Chiao Tung University (Sophomore)</li>
                            <li>Degree：Bachelor of Science-BS, Information Management and Finance</li>
                            <li>Hobby：Volleyball, Table Tennis, Cybersecurity</li>
                        </ul>
                    </div>
                </p>
                <p>
                    <div class="main_title">Contact Me</div>
                    <div class="main_cont">
                        <ul>
                            <li>Email：chi.mg10@nycu.edu.tw</li>
                            <li>Phone：+886933551757</li>
                            <li>Linkedin：</li>
                            <li>Address：No.1001, Daxue Rd., East Dist., Hsinchu City, Taiwan</li>
                        </ul>
                    </div>
                </p>
            </div>
        </main>
        <footer>Copyright© 2023 Yu-Chi Chen All Rights Reserved</footer>
    </body>
</html>