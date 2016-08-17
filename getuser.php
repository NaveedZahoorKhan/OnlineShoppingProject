<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php

$q = $_REQUEST['q'];

$con = mysqli_connect('localhost','root','','online_shopping');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}
else{
$sql="SELECT * FROM $q";
$result = mysqli_query($con,$sql);

echo "<table>
<tr>
<th>id</th>
<th>name</th>
<th>image</th>
<th>link</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['image'] . "</td>";
    echo "<td>" . $row['link'] . "</td>";
    echo "</tr>";
}

echo "</table>";
mysqli_close($con);
}
?>
</body>
</html>