<?php

declare(strict_types=1);

namespace App\ValueObject;

class Money
{
    private int $money;

    public function __construct(int $money)
    {
        $this->money = $money;
    }

    /**
     * @return int
     */
    public function getValue(): int
    {
        return intval($this->money);
    }

    /**
     * @return float
     */
    public function getTaxValue(): float
    {
        return intval($this->money) * 1.08;
    }
}