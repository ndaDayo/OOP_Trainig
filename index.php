<?php

declare(strict_types=1);

use App\Factory\MemberFactory;
use App\ValueObject\Money;

require 'vendor/autoload.php';

$member = new MemberFactory();

$customer = $member->create('adult');

$money = new Money(1200);
echo $customer->rate($money);