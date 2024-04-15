<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="comment.css">
    <link rel="stylesheet" href="./nav.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto Flex' rel='stylesheet'>
</head>

<body>
    <!-- <header>
        <nav>
            <ul>
                <li><a href="Admin.html">Home Panel</a></li>
                <li><a href="comment.html">Comments</a></li>
                <li><a href="add.html">Add Product</a></li>
                <li><a href="command.html">Command</a></li>
            </ul>
        </nav>
        <div class="logout">
            <a href="#">Logout</a>
        </div>
        <button class="hamburger">
            <div class="bars"></div>
        </button>
        <div class="nav-dropdown">
            <li><a href="Admin.html">Home Panel</a></li>
            <li><a href="comment.html">Comments</a></li>
            <li><a href="add.html">Add Product</a></li>
            <li><a href="command.html">Command</a></li>
        </div>
    </header> -->
    <h1 class="h1"><u>COMMENT</u></h1>
    <?php
    include "connection.php";
    $sel = "select*from reviews";
    $query = mysqli_query($con, $sel);
    while ($row = mysqli_fetch_array($query)) {
        echo '<div class="message">';
        echo '<div class="email">';
        echo '<div class="email"> Email:', ' ' . $row['email'] . '</div>';
        echo "</div>";
        echo '<div class="name">';
        echo '<div class="name"> <h2>Name:', ' ' . $row['name'] . '</h2></div>';
        echo "</div>";
        echo '<div class="text">';
        echo '<div class="text"> Comment:', ' ' . $row['comment'] . '</div>';
        echo "</div>";
        echo '<div class="delete">';
        echo "<a href='delete.php?d=" . $row['review_id'] . "'><h1>delete</h1></a>";
        echo "</div>";
        echo "</div>";
    }
    ?>
    <script>
        const btn = document.querySelector("span");
        const btnOn = document.querySelector(".nav-dropdown");
        const button = document.querySelector(".hamburger");

        button.onclick = function() {
            button.classList.toggle("isActive");
            btnOn.classList.toggle("open");
        };
    </script>
</body>

</html>