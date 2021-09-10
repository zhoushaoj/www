<?php
$command = 'cd /root/www && git fetch www&&git reset --hard www/main';
$output = shell_exec($command);
print $output;
?>