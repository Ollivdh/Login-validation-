<?php



?>

<!doctype html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="stylesheet.css">
    <title>login</title>
</head>
<body>
<div class="container">
    <form method="post">
        <div class="form-input">
            <i class="fa fa-user fa-2x cust" aria-hidden="true"></i>
            <input type="text" name="uname" value="" placeholder="Enter Username" required><br>
            <i class="fa fa-user fa-2x cust" aria-hidden="true"></i>
            <input type="text" name="pass" value="" placeholder="Enter Password" required><br>
            <input type="submit" name="submit" value="LOGIN"><br>
        </div>
    </form>
</div>
</body>
</html>