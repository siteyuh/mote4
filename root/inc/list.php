<style>
  table {
    display: table;
    border-collapse: collapse;
    border-spacing: 0px;
    border-color: gray;
    font-size: 14px;
    font-family: monospace;
    width: 100%;
  }
  tr:hover { background-color: #f5f5f5; }
  th, td { padding: 0.5em; }
  th { font-weight: bold; background-color: #fcf1e4; white-space: nowrap;}
  td { border-bottom: gray 1px solid; }
  td.nw { white-space: nowrap; }
</style>
<table>
  <tr>
    <th></th>
    <th>date</th>
    <th>weight</th>
    <th>fat</th>
  </tr>
<?php
$fp = file('inc/bodydata.csv');
//  var_dump($fp);
for ( $i = 0; $i < sizeof( $fp ); $i++ ) {
  $line = explode( ",", $fp[ $i ] );
?>
<tr>
  <td><a href="inc/delete.php?id=<?=$i?>">DEL</a></td>
  <td class="nw"><?=$line[0];?></td>
  <td><?=$line[1];?></td>
  <td><?=$line[2];?></td>
</tr>
<?php
}
?>
</table>
