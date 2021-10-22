<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex1</title>
</head>

<body>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="GET">
        <label for="name">Your name: </label>
        <input type="text" name="name" id="">
        <br>
        <label for="date">Date: </label>
        <input type="date" name="date" id="">
        <br>
        <label for="time">Time: </label>
        <select name="hour" id="">
            <?php
            for ($i = 0; $i <= 23; ++$i) {
                if ($hour == $i) {
                    print("<option selected>$i</option>");
                } else {
                    print("<option>$i</option>");
                }
            }
            ?>
        </select>
        <select name="minutes" id="">
            <?php
            for ($i = 0; $i <= 59; ++$i) {
                if ($minutes == $i) {
                    print("<option selected>$i</option>");
                } else {
                    print("<option>$i</option>");
                }
            }
            ?>
        </select>
        <select name="second" id="">
            <?php
            for ($i = 0; $i <= 59; ++$i) {
                if ($second == $i) {
                    print("<option selected>$i</option>");
                } else {
                    print("<option>$i</option>");
                }
            }
            ?>
        </select>
        <br>
        <button type="submit">Submit</button>
        <button type="reset">Reset</button>
    </form>
    <?php 
       
        $name = $_GET["name"];
        $date = $_GET["date"];
        if($name!= '' && $date!= ''){
            $hour = $_GET["hour"];
            $second = $_GET["second"];
            $minutes = $_GET["minutes"];
            $split = explode('-', $date);
            $year = $split[0];
            $month = $split[1];
            print("<p>Hi $name</p>");
            print("<p>You have choose to have a appointment on $hour:$minutes:$second,$date</p>");
            print("<p>More info:</p>");
            print("<p>In 12 hours, the time and date is");
            if($hour >= 13){
                $hour = $hour - 12;
                print(" $hour:$minutes:$second PM,");
            }else{
                print(" $hour:$minutes:$second AM,");
            }
            print("$date</p>");
            switch ($month) {
                case '1':
                case '3':
                case '5':
                case '7':
                case '8':
                case '10':
                case '12':
                    print("<p>This month has 31 days</p>");
                    break;
                case '4':
                case '6':
                case '9':
                case '11':
                    print("<p>This month has 30 days</p>");
                    break;
                default:
                    if((($year % 4 == 0) && ($year % 100 != 0)) || ($year % 400 == 0)){
                        print("<p>This month has 29 days</p>");
                    }else{
                        print("<p>This month has 28 days</p>");
                    }
                    break;
            }
        }else{
            print("<p>Enter your name and your date</p>");
        }
    ?>
</body>

</html>