<?php

namespace Se\Patterns\Three\V2;

class Logger
{
    public function log(string $message): void
    {
        echo "Logger: {$message}\n";
    }
}
