<?php
    function handleDate($birth){
        $split = explode('-', $birth);
        $date = $split[2];
        $month = $split[1];
        $year = $split[0];
        $birth = strtotime($birth);
        $day = date('l', $birth);
        print("<p>$day, ");
        switch ($month) {
            case '1':
                print("January");
                break;
            case '2':
                print("February");
                break;
            case '3':
                print("March");
                break;
            case '4':
                print("April");
                break;
            case '5':
                print("May");
                break;
            case '6':
                print("June");
                break;
            case '7':
                print("July");
                break;
            case '8':
                print("August");
                break;
            case '9':
                print("September");
                break;
            case '10':
                print("October");
                break;
            case '11':
                print("November");
                break;
            default:
            print("December");
                break;
        }
        print(" $date, $year</p>");
    };
function dateCal($birth1, $birth2){
    $date1 = strtotime($birth1);
    $date2 = strtotime($birth2);
    $dateDiff = round(abs($date1 - $date2) / (60*60*24));
    print("$dateDiff</p>");
};
function nowAge($birth){
    $nowDate = time();
    $date = strtotime($birth);
    $yearDiff = floor(($nowDate - $date)/(60*60*24*365));
    print("$yearDiff</p>");
};
function yearDiff($birth1, $birth2){
    $date1 = strtotime($birth1);
    $date2 = strtotime($birth2);
    $dateDiff = round(abs($date1 - $date2) / (60*60*24*365));
    print("$dateDiff</p>");
};
    if(array_key_exists('birth1', $_POST) && array_key_exists('birth2', $_POST)){
        $birth1 = $_POST['birth1'];
        $birth2 = $_POST['birth2'];
        print("<p>First Person's BirthDay is:</p>");
        handleDate($birth1);
        print("<p>Second Person's BirthDay is:</p>");
        handleDate($birth2);
        print("<p>Days Different: ");
        dateCal($birth1,$birth2);
        print("<p>Now Age First Person: ");
        nowAge($birth1);
        print("<p>Now Age Second Person: ");
        nowAge($birth2);
        print("<p>Years Different: ");
        yearDiff($birth1, $birth2);
    }
?>