<?php

declare(strict_types=1);

namespace TheUniC\OldNamespace;

use function Functional\map;

final class Class2
{
    public function method2(): array
    {
        return map([1, 2, 3], fn($x) => $x * 3);
    }
}
