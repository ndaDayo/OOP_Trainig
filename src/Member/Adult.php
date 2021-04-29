<?php

declare(strict_types=1);

namespace App\Member;

use App\ValueObject\Money;

class Adult implements MemberInterface
{
    public function rate(Money $money): int
    {
        return $money->getValue() * 2;
    }

    public function getMemberKind(): string
    {
        return '大人';
    }
}
