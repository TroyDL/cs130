<html>
<?php

header("Location: [url]");

setcookie("visit", 100, time()+3600);

function var_table($a) {
  print "<table BORDER=1> <tr><th>Keyword <th>Value(s)\n";
  foreach( $a as $key => $val ){
    print "<tr><td>$key <td>";
    if( is_array($val) ) {
      foreach( $val as $key2 => $val2 )
        print "$key2 -> $val2; ";
      print "\n";
    } else {
      print "$val\n";
    }
  }
  print "</table>\n";
}
?>

<body>
<h1> Echo Script TDL </h1>
Your submission had the following features:
<h2>Server Variables:</h2>
<?php var_table(?_SERVER) ?>
<h2>GET method variables</h2>
<?php var_table($_GET) ?>
<h2>POST method variables</h2>
<?php var_table($_POST) ?>
<h2>COOKIES</h2>
<?php var_table($_COOKIE) ?>


</body>
</html>
