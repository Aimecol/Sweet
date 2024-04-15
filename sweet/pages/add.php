<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="add.css">
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
        <div class="nav-dropdown hide">
            <li><a href="Admin.html">Home Panel</a></li>
            <li><a href="comment.html">Comments</a></li>
            <li><a href="add.html">Add Product</a></li>
            <li><a href="command.html">Command</a></li>
            <div class="logout">
                <a href="#">Logout</a>
            </div>
        </div>
    </header> -->
    <main>
        <form action="./upload_scrept.php" method="post" enctype="multipart/form-data" class="form">
            <h1>Product Importation Form</h1>
            <div class="file">
                <label for="img">Image: </label>
                <input type="file" name="img" class="ip">
            </div>
            <div class="name">
                <label for="pn">Name: </label>
                <input type="text" name="pn" class="ip" placeholder="product name">
            </div>
            <div class="price">
                <label for="prc">price: </label>
                <input type="text" name="prc" class="ip" placeholder="product price">
            </div>
            <div class="submit">
                <input type="submit" name="send" value="Insert" class="bu">
            </div>
        </form>
    </main>
    <!-- <script>
        const btn = document.querySelector("span");
        const btnOn = document.querySelector(".nav-dropdown");
        const button = document.querySelector(".hamburger");

        button.onclick = function () {
            button.classList.toggle("isActive");
            btnOn.classList.toggle("open");
        };
    </script> -->
</body>

</html>