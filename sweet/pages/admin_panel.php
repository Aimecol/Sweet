<?php
session_start();
if (empty(isset($_SESSION['username']))) {
  header("location:../index.html");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="./nav.css" />
  <link href='https://fonts.googleapis.com/css?family=Roboto Flex' rel='stylesheet'>
</head>

<body>
  <header>
    <nav>
      <ul>
        <li><a href="admin_panel.php?customers">Customer list</a></li>
        <li><a href="admin_panel.php?comment">Comments</a></li>
        <li><a href="admin_panel.php?add">Add Product</a></li>
        <li><a href="">Commands</a></li>
      </ul>
    </nav>
    <div class="logout">
      <form action="logout.php" method="POST">
        <button>Logout</button>
      </form>
    </div>
    <button class="hamburger">
      <div class="bars"></div>
    </button>
    <div class="nav-dropdown">
      <li><a href="admin_panel.php?customers">Customer list</a></li>
        <li><a href="admin_panel.php?comment">Comments</a></li>
        <li><a href="admin_panel.php?add">Add Product</a></li>
      <li><a href="command.html">Command</a></li>
      <div class="logout">
        <form action="logout.php" method="POST">
          <button>Logout</button>
        </form>
      </div>
    </div>
  </header>
  <center style="margin-top:7rem; font-size:30px; font-weight:bold;">Welcome In Admin Palel</center><br>
  <?php
  if (isset($_GET['customers'])) {
    include "customers.php";
  } elseif (isset($_GET['add'])) {
    include "add.php";
  } elseif (isset($_GET['comment'])) {
    include "comment.php";
  }
  ?>
  <script>
    const btnOn = document.querySelector(".nav-dropdown");
    const button = document.querySelector(".hamburger");

    button.onclick = function() {
      button.classList.toggle("isActive");
      btnOn.classList.toggle("open");
    };
  </script>
</body>

</html>