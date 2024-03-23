<?php

declare(strict_types=1);

namespace Bunny\Stream;

class Exception extends \Exception
{
    public function __toString()
    {
        return __CLASS__.": {$this->message}\n";
    }
}