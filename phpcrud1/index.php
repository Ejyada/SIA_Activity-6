<!DOCTYPE html>
<html>
    <head>
        <title>Crud version 1</title>
</head>
<body>
    <center>
<h1> Storing data in the database mydb</h1>
<form action ="insertrec.php" method = "post">
   <p> 
   <label for="userid"> User id :</label>
    <input type="text" name="custid" id ="custid">
</p>

<p> 
   <label for="firstname"> Firstname :</label>
    <input type="text" name="firstname" id ="firstname">
</p>

<p> 
   <label for="lastname"> Lastname :</label>
    <input type="text" name="lastname" id ="lastname">
</p>

<p> 
   <label for="email"> Email Address :</label>
    <input type="text" name="email" id ="email">
</p>
<input type="submit" value ="Submit">


</form>

<?php

$conn = mysqli_connect("localhost", "root", "", "mydb");

if($conn===false){
    die("ERROR: Could connect" . mysqli_connect_error());
}
$query = "SELECT * FROM tbluser";
echo '<table border="1" cellpadding = "2" cellspacing="2">
       <tr>
        <td> <font face="Arial">Firstname</font></td>
        <td> <font face="Arial">Lastname</font></td>
        <td> <font face="Arial">Email</font></td>
        <td> <font face="Arial">custid</font></td>
       </tr>';
    if($result = $conn->query($query)){
        while($row = $result->fetch_assoc()){
            $field1name = $row["firstname"];
            $field2name = $row["lastname"];
            $field3name = $row["email"];
            $field4name = $row["custid"];
       echo '<tr>
                <td>'.  $field1name. '</td>
                <td>'.  $field2name. '</td>
                <td>'.  $field3name. '</td>
                <td>'.  $field4name. '</td>
             </tr>';
          
        }
        $result->free();
    }



?>

</table>




</center>
</body>



</html>