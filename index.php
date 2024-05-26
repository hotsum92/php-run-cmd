<?php


if(isset($_POST['STDIN'])){
  $body = $_POST['STDIN'];
} else {
  $body = "\n";
}

$tmpFile = tempnam(sys_get_temp_dir(), 'php');
file_put_contents($tmpFile, $body);

passthru("sh " . dirname(__FILE__) . "/run.sh" . " < ".$tmpFile);

unlink($tmpFile);

