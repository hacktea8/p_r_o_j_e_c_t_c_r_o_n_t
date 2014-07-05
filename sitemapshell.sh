#!/bin/sh
/usr/local/php/bin/php  /var/www/html/joker/cront/task/google_sitemap.php >/dev/null
sleep 1m
/usr/local/php/bin/php  /var/www/html/emules/cront/task/google_sitemap.php >/dev/null
sleep 1m
/usr/local/php/bin/php  /var/www/html/btvideo/cront/task/google_sitemap.php >/dev/null
sleep 1m
/usr/local/php/bin/php  /var/www/html/qvodp2p/cront/task/google_sitemap.php >/dev/null
