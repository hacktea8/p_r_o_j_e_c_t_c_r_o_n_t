<?php
$pattern = '/hhcomic/'.basename(__FILE__);
require_once '/var/www/html/comics/application/cront/grab/hhcomic/singleProcess.php';
$root = '/usr/local/php/bin/php /var/www/html/comics/application/cront/grab/hhcomic/%sgrab.php';
$task = array('q','t','w','z');
foreach($task as $val){
  $cmd = sprintf($root,$val);
  exec($cmd);
  sleep(1);
}
