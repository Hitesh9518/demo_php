<?php
    echo "Today is " . date("Y/m/d") ."<br>";
    echo "Today is " . date("l") ."<br>";

    echo date("Y") ."<br>";

    echo "Today is " .date("h:i:sa")."<br>";
    
    // Get Your TimeZone()
    
    date_default_timezone_set("America/new_york");
    echo "Today is " .date("h:i:sa")."<br>";
    
    // Create a Date 
    // mktime(hour,min.sec.month,day,year)
    
    $h = mktime(11,10,1,2,2,11);
    echo "Create Date is " .date("d-m-y h:i:sa",$h)."<br>";
    
    // Create Date from a string with strtotime()
    
    $k = strtotime("08:10am February 22 2023");
    echo "Create Date is " .date("d-m-y h:i:sa",$k)."<br>";
    
    $j = strtotime("yesterday");
    echo "yesterday ".date("d-m-y h:i:sa",$j)."<br>";
    
    $n = strtotime("next Tuesday");
    echo "next Tuesday ".date("d-m-y h:i:sa",$n)."<br>";

    $m = strtotime("+4 Months");
    echo "+ 4 Months ".date("d-m-y h:i:sa",$m)."<br>";

    // next 2 friday

    $startdate = strtotime("Monday");
    $enddate = strtotime("+2 weeks", $startdate);
    
    while ($startdate < $enddate){
        echo date("M d",$startdate)."<br>";
        $startdate = strtotime("+1 week",$startdate);

    }
    ?>