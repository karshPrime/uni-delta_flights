<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="author" content="utkarsh"/>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="icon" href="images/icon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="styles/responsive.css" media="screen and (max-width: 1024px)"/>
    <title>Delta • Product</title>
</head>

<body>
    <header>
        <a href="index.html"><img src="images/logo.png" alt="Delta Logo" id="logo"></a>
        <nav>
            <ul>
                <li class="nav_bar"><a class="nav_link" id="<?php if($page=='home'){echo 'on_page';}?>" href="index.php"> Home </a></li>
                <li class="nav_bar"><a class="nav_link" id="<?php if($page=='product'){echo 'on_page';}?>" href="product.php"> Browse </a></li>
                <li class="nav_bar"><a class="nav_link" id="<?php if($page=='enquire'){echo 'on_page';}?>" href="enquire.php"> Enquire </a></li>
                <li class="nav_bar"><a class="nav_link" id="<?php if($page=='about'){echo 'on_page';}?>" href="about.php"> About Us </a></li>
                <li class="nav_bar"><a class="nav_link" id="<?php if($page=='enhancements'){echo 'on_page';}?>" href="enhancements2.php"> Enhancements </a></li>
            </ul>
        </nav>
    </header>
