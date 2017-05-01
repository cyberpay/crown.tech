<?php
$nacti2 = file_get_contents('http://api.node-vps.com/crown/tech');


$crw=(json_decode($nacti2, true));
$crw_usd_price=$crw['result']['crw_usd'];
$t = $crw['result']['trons'];
//echo $crw['result']['trons'];
$market_cap = $crw['result']['market_cap'];
//$trons = "-";
$avasupply = round(file_get_contents('http://chainz.cryptoid.info/crw/api.dws?q=totalcoins'),0);
