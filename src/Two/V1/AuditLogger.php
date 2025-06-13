<?php

namespace Se\Patterns\Two\V1;

class AuditLogger
{
    private string $logFilePath;

    public function __construct(string $logFilePath = 'audit.log')
    {
        $this->logFilePath = $logFilePath;
    }

    public function log(string $message): void
    {
        echo "AuditLogger: writing in '{$this->logFilePath}': '{$message}'\n";
    }
}
