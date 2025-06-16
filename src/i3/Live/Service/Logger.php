<?php

namespace Se\Patterns\i3\Live\Service;

class Logger
{
    public function log(string $message): void
    {
        echo "Logger: {$message}\n";
    }
}
