<?php
$mysqli = new mysqli("localhost", "root", "", "computerhost");
if($mysqli->connect_error) {
  exit('Could not connect');
}

$sql = "SELECT id, servicename, price FROM services WHERE servicename = ?";

$stmt = $mysqli->prepare($sql);
$stmt->bind_param("s", $_GET['q']);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($cid, $cname, $name);
$stmt->fetch();
$stmt->close();

// echo "<table>";
// echo "<tr>";
// echo "<th>Amount</th>";
// echo "<td>" . $name . "</td>";

// echo "</tr>";
// echo "</table>";

?>
<div class="form-group">
                <input type="text" readonly= "readonly" value="<?php echo $name ?>">           
 </div>  
            
