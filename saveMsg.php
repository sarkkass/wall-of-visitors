<?php
if (empty($_GET)) {
  die('Et täyttänyt lomaketta');
}
$nimimerkki = $_GET['nimimerkki'];
$msg = $_GET['msg'];

$errors = array();

if (empty($nimimerkki)) $errors[] = 'Et antanut nimimerkkiä';
if (empty($msg)) $errors[] = 'Ole hyvä ja kirjoita viestisi';

if (!empty($errors)) {
  $output = '<ul><li>'.implode('</li><li>',$errors) .'</li></ul>';
}
else {
  $output = 'Viesti tallennettu';
}

$xml = simplexml_load_file('data/data.xml');
$uusiViesti = $xml->addChild('viesti');
$uusiViesti->addChild('nimimerkki', $nimimerkki);
$uusiViesti->addChild('msg', $msg);



// MUOTOILU JA TALLENNUS
$dom = new DOMDocument("1.0");
$dom->preserveWhiteSpace = false;
$dom->formatOutput = true;
$dom->loadXML($xml->asXML());
$dom->save('data/data.xml');


header('refresh:3;url=create.php');

echo $output;
