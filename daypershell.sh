#!/bin/sh
/usr/local/soft/php/bin/php  /var/www/html/cront/119g/main.php >/dev/null 
#sleep 1m
#/usr/local/soft/php/bin/php  /var/www/html/emules/cront/task/google_sitemap.php >/dev/null 
sleep 1m
/usr/local/soft/php/bin/php  /var/www/html/emules/cront/grab/alisearch/main.php >/dev/null 
#sleep 1m
#/usr/local/soft/php/bin/php  /var/www/html/btvideo/cront/task/google_sitemap.php >/dev/null 
sleep 1m
/usr/local/soft/php/bin/php  /var/www/html/btvideo/cront/grab/alisearch/main.php >/dev/null 
#sleep 1m
#/usr/local/soft/php/bin/php  /var/www/html/joker/cront/task/google_sitemap.php >/dev/null 
sleep 1m
/usr/local/soft/php/bin/php  /var/www/html/joker/cront/grab/alisearch/main.php >/dev/null 
sleep 1m
/usr/local/soft/php/bin/php  /var/www/html/qvodp2p/cront/grab/alisearch/main.php >/dev/null 

