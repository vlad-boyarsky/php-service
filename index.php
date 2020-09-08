<?php

$isEnable = true;

$numbersData;

$pid = pcntl_fork();

if ($pid == -1) {

    die('ERROR to make fork process' . PHP_EOL);

} elseif ($pid) {

    die('OK Destroy parent process' . PHP_EOL);

} else {

    while($isEnable) {
        
        for ($i = 0; $i < 10; $i++) {
            
            file_put_contents('/var/www/' . current_date . '.txt', 'Time: '. date('Y-m-s') .' updated by service' );
            sleep(2);
        }
        
        $isEnable = false;
    }
}

posix_setsid();
    