<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php require 'views/header.php';?>
        <div id="main">
            <h1 class="center">News section.</h1>
            <form action="<?php echo constant('URL'); ?>news/registerStudent" method="POST">
                <p>
                    <label for="enrollment">enrollment</label><br>
                    <input type="text" name="enrollment" id="" required>
                </p>
                <p>
                    <label for="name">Name</label><br>
                    <input type="text" name="name" id="" required>
                </p>
                <p>
                    <label for="lastName">lastName</label><br>
                    <input type="text" name="lastName" id="" required>
                </p>
                <p>
                <input type="submit" value="Register new student">
                </p>
            </form>    
        </div>
    <?php require 'views/footer.php';?>
</body>
</html>