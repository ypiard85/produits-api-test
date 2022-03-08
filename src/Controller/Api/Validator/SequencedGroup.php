<?php

declare(strict_types=1);

namespace App\Controller\Api\Validator;

use Symfony\Component\Validator\Constraints\GroupSequence;

class SequencedGroup
{
    public function __invoke()
    {
        return new GroupSequence(['first', 'second']); // now, no matter which is first in the class declaration, it will be tested in this order.
    }
}