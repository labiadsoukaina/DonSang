<!DOCTYPE html>
<html>
<head>
 <title>Table with database</title>
 <style>
  table {
   border-collapse: collapse;
   width: 100%;
   color: #588c7e;
   font-family: monospace;
   font-size: 25px;
   text-align: left;
     } 
  th {
   background-color: #B40404;
   color: white;
    }
  tr:nth-child(even) {background-color: #f2f2f2}
 </style>
</head>
<body>
 <table>
 <tr>
  <th>Numero</th> 
  <th>Capacite maximum</th> 
  <th>Type de don</th>
 </tr>
 <?php
include ('connexionBD.php');
  // Check connection
  
  $sql = "SELECT * FROM salle";
  $result = $bdd->query($sql);
  //if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch()) {
    echo "<tr><td>" . $row["Numero"]. "</td><td>" . $row["CapaciteMax"] . "</td><td>"
. $row["TypeDon"]. "</td><td>" . <a href='supprimer.php'>Supprimer</a> . "</td></tr>";
}
echo "</table>";

include('salle.php');

 ///else { echo "0 results"; }
//$bdd->close();
?>
</table>
</body>
</html>






