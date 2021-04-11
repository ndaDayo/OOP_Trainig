<?php

declare(strict_types=1);

namespace App;

class ItemA
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

    /**
     * @param $money
     * @return string
     */
    public function showAmountWithShippingFee(int $money): string
    {
        return $money * 1.08 . +1000 . '円(送料込)';
    }
}