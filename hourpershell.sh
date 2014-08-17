#!/bin/sh
sleep 1m
/usr/local/php/bin/php  /var/www/html/emules/cront/task/sethitsnum.php >/dev/null &
sleep 1m
/usr/local/php/bin/php  /var/www/html/btvideo/cront/task/sethitsnum.php >/dev/null &
sleep 1m
/usr/local/php/bin/php  /var/www/html/joker/cront/task/sethitsnum.php >/dev/null &
sleep 1m
/usr/local/php/bin/php  /var/www/html/qvodp2p/cront/task/sethitsnum.php >/dev/null &
sleep 1m
/usr/local/php/bin/php  /var/www/html/btvideo/cront/grab/vvtor/grab.php >/dev/null &
#sleep 1m
#/usr/local/php/bin/php  /var/www/html/qvodp2p/cront/grab/tutuzx/grab.php >/dev/null &
#/usr/local/php/bin/php  /var/www/html/cront/comics/hhcomic/sixhourexec.php &
sleep 1m
/usr/local/php/bin/php  /var/www/html/cront/emule/ed2kers/sixhourexec.php &

