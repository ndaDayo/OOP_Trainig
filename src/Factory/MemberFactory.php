<?php

declare(strict_types=1);

namespace App\Factory;

use App\Member\Adult;
use App\Member\Child;

class MemberFactory
{
    public function create(string $memberKind)
    {
        if ($memberKind === 'adult') {
            return new Adult();
        }

        return new Child();
    }
}
