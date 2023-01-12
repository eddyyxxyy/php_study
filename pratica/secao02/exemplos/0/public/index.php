<?php require "../bootstrap.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Curso de PHP devclass</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.2/css/bootstrap.min.css"
</head>
<body>
    <div class="container">
        <?php
        try {
            require load();

        } catch (Exception $exception) {
            echo $exception->getMessage();
        }
        ?>
    </div>
</body>
</html>