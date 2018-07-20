<?php
require_once(__DIR__.'./blockchain/blockchain.php');

/*
Set up a simple chain and mine two blocks.
*/

$testCoin = new BlockChain();

echo "mining block 1...\n";
$testCoin->push(new Block(1, strtotime("now"), "Data of First Block Minned"));

echo "mining block 2...\n";
$testCoin->push(new Block(2, strtotime("now"), "Data of Second Block Minned"));
//
//echo "mining block 3...\n";
//$testCoin->push(new Block(3, strtotime("now"), "Data of Third Block Minned"));



echo json_encode($testCoin, JSON_PRETTY_PRINT);
//$json_decoded = json_decode($testCoin,true);
?>

