<?php
header('Content-Type: text/plain');
$allstates="Mississippi Alabama Texas Massachusetts Kansas";
$statesArray=[];
$state1 = explode(' ', $allstates);
$i=0;
foreach($state1 as $state)
{
    if(preg_match('/xas$/',($state)))
    {
        $statesArray[$i]=$state;
        $i=$i+1;
        print "\nThe States that ends in xas:" . $state;
    }
}
foreach ($state1 as $state)
 {
    if (preg_match('/^k.*s$/i', ($state))) 
    {
    $statesArray[$i] = ($state);
    $i = $i + 1;
    echo "\nThe states that begins with k ans ends in s:" . $state;
    }
   }
   foreach($state1 as $state)
   {
    if(preg_match('/^M.*s$/',($state)))
    {
        $statesArray[$i] = ($state);
        $i = $i + 1;
        echo "\nThe states that begins with M and ends in s:" . $state;
    }
   }
   foreach($state1 as $state)
    {
    if (preg_match('/a$/', ($state)))
     {
     $statesArray[$i] = ($state);
     $i = $i + 1;
     echo "\nThe states that ends in a:" . $state;
    }
    }
    foreach ($statesArray as $element => $value) 
    {
     print( "\n" . $value . " is the element " . $element);
    }
    ?>      
