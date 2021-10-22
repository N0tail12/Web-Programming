<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Thank for your submit</h1>
    
    <?php
        $name = $_POST['name'];
        $class = $_POST["class"];
        $uni = $_POST["uni"];
        $hobby = $_POST["hobby"];
        print("<h1>Hello, $name</h1>");
        print("<p>You are studying at $class, $uni</p>");
        print("<p>Your hobby is $hobby</p>");
    ?>
</body>
</html>