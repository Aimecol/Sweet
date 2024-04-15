<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="admin.css">
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
    <main>
        <table>
            <?php
            include "connection.php";
            $sel = "select customer_id,email,first_name,last_name,address,phone_number,username from customers";
            $query = mysqli_query($con, $sel);
            echo '<tr>
                            <th>N<sup><u>0</u></sup></th>
                            <th>FIRST NAME</th>
                            <th>LAST NAME</th>
                            <th>ADRESS</th>
                            <th>PHONE NUMBER</th>
                            <th>EMAIL</th>
                            <th>USER NAME</th>
                            <th>Delete</>
                        </tr>';
            while ($row = mysqli_fetch_array($query)) {
                echo "<tr>";
                echo "<td>" . $row['customer_id'] . "</td>";
                echo "<td>" . $row['first_name'] . "</td>";
                echo "<td>" . $row['last_name'] . "</td>";
                echo "<td>" . $row['address'] . "</td>";
                echo "<td>" . $row['phone_number'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['username'] . "</td>";
                echo "<td><a href='deletecustomer.php?a=" . $row['customer_id'] . "'>Delete</a></td>";
                echo "</tr>";
            }
            ?>
        </table>
    </main>
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