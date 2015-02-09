<?php
$root = '/usr/local/soft/php/bin/php /var/www/html/emules/cront/grab/ed2kers/%srab.php';
$task = array('g');
foreach($task as $val){
  $cmd = sprintf($root,$val);
  exec($cmd);
  sleep(1);
}
