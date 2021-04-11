<?php

declare(strict_types=1);

namespace App;

use App\ValueObject\Money;

class ItemA
{
    /**
     * @param int $money
     * @return string
     */
    public function showAmount(int $money): string
    {
        $money = new Money($money);
        return $money->getValue() . '円';
    }

    /**
     * @param int $money
     * @return string
     */
    public function showAmountWithTax(int $money): string
    {
        $money = new Money($money);
        return $money->getTaxValue() . '円';
    }
}