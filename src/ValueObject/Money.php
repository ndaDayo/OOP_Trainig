<?php

declare(strict_types=1);

namespace App\ValueObject;

use InvalidArgumentException;

use function intval;

class Money
{
    private int $money;

    public function __construct(int $money)
    {
        if ($money <= 0) {
            throw new InvalidArgumentException('Money must be positive number:' . $money);
        }

        $this->money = $money;
    }

    public function getValue(): int
    {
        return intval($this->money);
    }
}
