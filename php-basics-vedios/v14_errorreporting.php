<?php
// How to find path of php.ini file in ubuntu.
/* The three files you have there are each meant for different uses.

/etc/php/5.6/cli/php.ini is for the CLI PHP program, which you found by running php on the terminal.

/etc/php/5.6/cgi/php.ini is for the php-cgi system which isn't specifically used in this setup.

/etc/php/5.6/apache2/php.ini is for the PHP plugin used by Apache.
This is the one you need to edit for changes to be applied for your Apache setup which utilizes the in-built PHP module to Apache.

/etc/php/5.6/fpm/php.ini is for the php5-fpm processor, which is a fastcgi-compatible
'wrapper' for PHP processing (such as to hand off from NGINX to php5-fpm) and runs as a s
tandalone process on the system (unlike the Apache PHP plugin) */

//use terminal
// $php -i | grep 'php.ini'

//path for error log messges.

/* By default, /var/log/apache2/error.log.This can be configured in /etc/php5/apache2/php.ini.
use terminal
tail -f /var/log/apache2/error.log */

echo 'hello';
$text = 'lakshmi';
