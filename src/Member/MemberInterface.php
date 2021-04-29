<?php

declare(strict_types=1);

namespace App\Member;

use App\ValueObject\Money;

interface MemberInterface
{
    public function rate(Money $money): int;

    public function getMemberKind(): string;
}
