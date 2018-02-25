<?php
echo "<h2>Hello from ex1.php!</h2>";
echo "<table>";
$row = "<tr><td></td>";
for($i = 1; $i < 101; $i++) {
  $row .= "<td> {$i} </td>";
}
echo ($row . "</tr>");

for($i = 1; $i < 101; $i++) {
  $row = "<tr><td> {$i} </td>";
  for($j = 1; $j < 101; $j++) {
    $k = $j*$i;
    $row .= ("<td> {$k} </td>");
  }
  echo $row;
  echo "</tr>";
}
echo "</table>";
?>
