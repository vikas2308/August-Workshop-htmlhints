<?php
include('./inc/config.php');

$sql = "SELECT * FROM test";

$result = $link->query($sql);
var_dump($result);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
          echo $row['head'];
        }
}           
?>
