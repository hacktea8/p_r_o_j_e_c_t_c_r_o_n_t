#!/bin/sh
/usr/local/php/bin/php  /var/www/html/cront/119g/main.php &
sleep 1m
/usr/local/php/bin/php  /var/www/html/emules/cront/task/google_sitemap.php &
sleep 1m
/usr/local/php/bin/php  /var/www/html/emules/cront/grab/alisearch/main.php &

