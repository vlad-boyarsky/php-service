<?php

$getDateFile = file_get_contents('/var/www/current_date.txt');

echo $getDateFile . "<br>Hello user time login ↑";