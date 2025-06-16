<?php

namespace Se\Patterns\Three\V1;

class Logger
{
    public function log(string $message): void
    {
        echo "Logger: {$message}\n";
    }
}
