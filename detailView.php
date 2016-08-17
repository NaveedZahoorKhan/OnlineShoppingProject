<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            $id = $_GET["q"];
            $cat = $_GET["cat"];
            
            $conn = mysqli_connect('localhost', 'root', 'toor', 'online_shopping', '3306');
            if (!$conn) {
                die('Could not connect to MySQL: ' . mysqli_connect_error());
            }
            $sql = "Select * from $cat where id= $id";
            
            $res = mysqli_query($conn, $sql);
            echo mysqli_error($conn);
            $row = mysqli_fetch_array($res);
            $img = $row["image"];
            echo '<img src="'.$img.'"';
            $dis = $row["description"];
            echo "<h1>".$dis.'</h1>';
            
// TODO: insert your code here.
            mysqli_close($conn);
        ?>
    </body>
</html>
