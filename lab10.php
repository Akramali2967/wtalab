<html>
<body>
<style>
table, td, th
{
border: 1px solid black;
width: 33%;
text-align: center;
border-collapse:collapse;
background-color:lightblue;
}
table { margin: auto; }
</style>
<?php
$dbname="cse";
$server="localhost";
$user="root";
$pass="";
$conn=mysqli_connect($server,$user,$pass,$dbname);
if($conn->connect_error)
{
    die("Connection Failed".$conn->connect->error);
}
$sql = "SELECT * FROM student";
$result = $conn->query($sql);
echo "<br>";
echo "<center> BEFORE SORTING </center>";
echo "<table border='2'>";
echo "<tr>";
echo "<th>USN</th><th>NAME</th><th>Address</th></tr>";
$a=[];
if($result->num_rows>0)
{
    while($row=$result->fetch_assoc())
    {
        echo "<tr>";
        echo "<td>". $row["usn"]."</td>";
        echo "<td>". $row["name"]."</td>";
        echo "<td>". $row["addr"]."</td></tr>"; 
        array_push($a,$row["usn"]);
    }
}
else
    {
     echo "Table is Empty";
    }
    echo "</table>";
$n=count($a);
for($i=0;$i<($n-1);$i++)
{
    $pos=$i;
    for($j=$i+1;$j<$n;$j++)
    {
        if($a[$pos]>$a[$j])
        {
            $pos=$j;
        }
    }
    if ( $pos!= $i ) 
    {
    $temp=$a[$pos];
    $a[$pos]=$a[$i];
    $a[$i]=$temp;
    }
}    
$b=[];
$c=[];
$result = $conn->query($sql);
if ($result->num_rows> 0)
{
while($row = $result->fetch_assoc())
 {
    for($i=0;$i<$n;$i++)
     {
    if($row["usn"]== $a[$i]) 
    {
    $b[$i]=$row["name"];
    $c[$i]=$row["addr"];
    }
    }
    }
}
    echo "<br>";
echo "<center> AFTER SORTING <center>";
echo "<table border='2'>";
echo "<tr>";
echo "<th>USN</th><th>NAME</th><th>Address</th></tr>";
for($i=0;$i<$n;$i++)
{
    echo "<tr>";
    echo "<td>".$a[$i]."</td>";
    echo "<td>".$b[$i]."</td>";
    echo "<td>".$c[$i]."</td>";
}
$conn->close();
?>
