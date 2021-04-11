<?php

declare(strict_types=1);

namespace App;

class ItemB
{
    /**
     * @param $money
     * @return string
     */
    public function showAmount(int $money): string
    {
        return $money . '円';
    }

    /**
     * @param $money
     * @return string
     */
    public function showAmountWithTax(int $money): string
    {
        return $money * 1.08 . '円';
    }
}