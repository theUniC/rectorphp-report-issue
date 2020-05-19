<?php

declare(strict_types=1);

namespace TheUniC\OldNamespace;

use function Functional\map;

final class Class1
{
    public function method1(): array
    {
        return map([1, 2, 3], fn($x) => $x * 2);
    }
}
