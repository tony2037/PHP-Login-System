<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.30/css/uikit.min.css" />
    <title>Index</title>
</head>
<body>
    <h2>
        <?php
            echo "Welcome to my page ^^! Today is : ";
            echo date("Y m d");
        ?>
    </h2>

    <p><a href="./Login.php">Login</a></p>
    <p><a href="./Register.php">Register</a></p>

    <?php define("__FOOTER__",true); require_once "./inc/footer.php"; ?>

</body>
</html>