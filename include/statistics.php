<?php
$nacti1 = file_get_contents('http://c-cex.com/t/btc-usd.json');
$btc_usd=(json_decode($nacti1, true));
$btc_usd_price=$btc_usd['ticker']['lastprice'];
$nacti2 = file_get_contents('http://c-cex.com/t/crw-btc.json');
$crw_btc=(json_decode($nacti2, true));
$crw_btc_price=$crw_btc['ticker']['lastprice'];
$crw_usd_price=round($crw_btc_price*$btc_usd_price,6);
$json = file_get_contents('http://api.node-vps.com/crown/throne/count');
$obj = json_decode($json, true);

$mcapd = file_get_contents('http://api.coinmarketcap.com/v1/ticker/crown/');
$mcapj= (json_decode($mcapd, true));
$market_cap = $mcapj[0]['market_cap_usd'];
$trons = $obj['result'];
//$trons = "-";
$avasupply = round(file_get_contents('http://chainz.cryptoid.info/crw/api.dws?q=totalcoins'),0);
