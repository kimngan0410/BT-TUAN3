<?php
//Cau a:
    echo str_replace('/', '-', '14/03/2018'). '<br>';
    
//Cau b:
    $temp = substr('14/03/2018', 3, 2);
    $dd = substr('14/03/2018', 0, 2);
    $year = substr('14/03/2018', 6, 4);
    switch ($temp)
    {
        case '01':
            $temp = 'January';
            break;
        case '02';
            $temp = 'Febuary';
            break;
        case '03';
            $temp = 'March';
            break;
        case '04';
            $temp = 'April';
            break;
        case '05';
            $temp = 'May';
            break;
        case '06';
            $temp = 'June';
            break;
        case '07';
            $temp = 'July';
            break;
        case '08';
            $temp = 'August';
            break;
        case '09';
            $temp = 'September';
            break;
        case '10';
            $temp = 'October';
            break;
        case '11';
            $temp = 'November';
            break;
        case '12';
            $temp = 'December';
            break;
    }
    echo $temp. " ".$dd." ".$year;
?>

