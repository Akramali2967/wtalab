<html>
<meta http-equiv="refresh" content="1"/>
    <style>
        body{
            color:black;
            background-color:red;
            font-size:70px;
            position:absolute;
            top:30%;
            left:30%;
        }
        </style>
   <body>
  <?php
  echo "India Timezone<br>";
echo "Date:";
date_default_timezone_set("Asia/Calcutta");
echo date("h:i:s A");
?>
</body> 
</html>

