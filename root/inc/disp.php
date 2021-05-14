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
  td {
    text-align: center;
  }
  tr:hover { background-color: #f5f5f5; }
  th, td { padding: 0.5em; }
  th { color: white; font-weight: bold; background-color: gray; white-space: nowrap; }
  td { border-bottom: gray 1px solid; }
  td.nw { white-space: nowrap; }
</style>
 <table align="center" cellpadding="0" cellspacing="0">
  <tr>
    <th>date</th><th>weight</th><th>body fat</th>
  </tr>
<?php
// 読み込んで表示を繰り返す。
$fp = file('bodydata.csv');
//var_dump($fp);
$fp = array_reverse($fp); // おわりから読み込む
for ( $i = 0; $i < sizeof( $fp ); $i++ ) {
  $line = explode( ",", $fp[ $i ] );
?>
  <tr>
    <td><?=$line[0];?></td>
    <td><?=$line[1];?> kg</td>
    <td><?=$line[2];?>%</td>
  </tr>

<?php
}
?>
</table>
