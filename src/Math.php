<?php
declare(strict_types=1);

class Math {
  public static function fibonacci(int $n): int {
    if ($n < 0) {
      throw new InvalidArgumentException('Index cannot be negative');
    }

    return $n > 1 ? self::fibonacci($n - 1) + self::fibonacci($n - 2) : $n;
  }

  public static function factorial(int $n): int {
    return $n > 1 ? $n * self::factorial($n - 1) : $n;
  }
}

