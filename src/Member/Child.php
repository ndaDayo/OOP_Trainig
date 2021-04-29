<?php

declare(strict_types=1);

namespace App\Member;

use App\ValueObject\Money;

class Child implements MemberInterface
{
    public function rate(Money $money): int
    {
        return $money->getValue();
    }

    public function getMemberKind(): string
    {
        return '子供';
    }
}
