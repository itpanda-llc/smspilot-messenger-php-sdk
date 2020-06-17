<?php

spl_autoload_register(function($className)
{
    if (strpos($className,
            $prefix = 'Panda\SMSPilot\MessengerSDK\\') === 0)
    {
        $fileName = sprintf("%s.php",
            str_replace('\\',
                DIRECTORY_SEPARATOR,
                substr($className, strlen($prefix))));

        $filePath = sprintf("%s%ssrc%s%s",
            __DIR__,
            DIRECTORY_SEPARATOR,
            DIRECTORY_SEPARATOR,
            $fileName);

        if (is_readable($filePath)) require $filePath;
    }
});
