<?php

namespace Exceptions;

use Exception;
use Throwable;

class AppException extends Exception
{
    public function __construct(
        string $message,
        int $code = 0,
        Throwable $previous = null
    ) {
        parent::__construct($message, $code, $previous);
        // TODO: zapisanie błędu do logów
        if ($previous !== null) {
            // TODO: zapisanie błędu do logów
        }
    }

    public function __toString()
    {
        return __CLASS__ . ": [{$this->code}]: {$this->message}\n";
    }
}
