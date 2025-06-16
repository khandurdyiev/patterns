<?php

namespace Se\Patterns\i3\Final\Service;

class Logger
{
    public function log(string $message): void
    {
        echo "Logger: {$message}\n";
    }
}
