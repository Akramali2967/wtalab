<html>
<head>
    <style>
        table td{
            border:1px solid black;
            width: 35%;
            text-align: center;
            background-color: DarkGray;
        }
        table{
            margin:auto;
        }
        input,p{
            text-align:center;
        }
        </style>
        </head>
<body>
    <form method="post">
        <table>
        <caption><h2> SIMPLE CALCULATOR </h2></caption>>
        <tr>
            <td>First Number:</td>
            <td><input type="text" name="num1"/></td>
        <td rowspan="2"><input type="submit" name="submit" value="calculate"></td>
        </tr>
        <tr>
            <td>Second Number:</td>
            <td><input type="text" name="num2"/></td>
</tr>
</form>
<?php
if(isset($_POST['submit']))
{
    $n1=$_POST['num1'];
    $n2=$_POST['num2'];
    if(is_numeric($n1) and is_numeric($n2))
    {
        echo "<tr><td> Additon:</td><td><p>".($n1+$n2)."</p></td>";
        echo "<tr><td> Subtraction :</td><td><p> ".($n1-$n2)."</p></td>";
        echo "<tr><td> Multiplication :</td><td><p>".($n1*$n2)."</p></td>";
        echo "<tr><td>Division :</td><td><p> ".($n1/$n2)."</p></td>";
        echo "</table>";
    }
    else
    {
        echo "<script type='text/javascript'> alert('Enter A Valid Number');</script> ";
    }
}
?>

</body>
</html>