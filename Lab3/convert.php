<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convert</title>
</head>

<body>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
        <label for="">Select Your Choice:</label>
        <input type="radio" name="choice" id="" value="1" required>Radian
        <input type="radio" name="choice" id="" value="2">Degree
        <br>
        <label for="">Enter Number:</label>
        <input type="number" name="number" id="" required>
        <br>
        <button type="Submit">Submit</button>
        <button type="reset">Reset</button>
    </form>
    <?php
    if(array_key_exists('choice', $_POST)){
        $choice = $_POST['choice'];
        $number = $_POST['number'];
        if ($choice == 1) {
           $number = rad2deg($number);
           print("<p>$number</p>");
        }
        if ($choice == 2) {
            $number = deg2rad($number);
            print("<p>$number</p>");
        }
        
    }
    ?>
</body>

</html>