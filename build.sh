# /bin/bash
php -d phar.readonly=0 ./phar-builder.phar package elysa/composer.json
chmod +x elysa.phar