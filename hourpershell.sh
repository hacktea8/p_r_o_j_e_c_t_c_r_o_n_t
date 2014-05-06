#!/bin/sh
/usr/local/php/bin/php  /var/www/html/cront/comics/hhcomic/sixhourexec.php &
sleep 1m
/usr/local/php/bin/php  /var/www/html/cront/emule/ed2kers/sixhourexec.php &
sleep 1m
/usr/local/php/bin/php  /var/www/html/emules/cront/task/sethitsnum.php & >/dev/null
sleep 1m
/usr/local/php/bin/php  /var/www/html/btvideo/cront/task/sethitsnum.php & >/dev/null

