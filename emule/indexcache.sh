#!/bin/sh
sleep 5m
echo 1
/usr/local/php/bin/php /var/www/html/emules/cront/task/setindexdatacache.php &
echo 'OK'
