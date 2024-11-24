<?php
$file = '/home/fuscoartistry/htdocs/www.fuscoartistry.com/storage/logs/laravel.log';
$test = 'Test write to log file';
file_put_contents($file, $test.PHP_EOL, FILE_APPEND);
echo 'Write test completed';
?>
