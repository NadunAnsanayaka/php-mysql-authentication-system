<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link
    href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
    rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&family=Poppins:wght@400;500;600&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="style.css" />
  <title>My website</title>
</head>

<body>
  <div class="navigation-div">
    <nav class="navigation">
      <ul>
        <li><a class="active" href="index.php">Home</a></li>
        <li><a href="#home">News</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
     
        <?php
        if (isset($_SESSION["username"])) {
          echo ' <a class="login" href="./includes/logout.inc.php">'. $_SESSION["username"] .'</a>' ;
        } else {
          echo  '<a class="login" href="login.php"> Login  </a>';
        }
        ?>

    </nav>
  </div>