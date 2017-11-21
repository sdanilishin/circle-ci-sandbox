<?php
declare(strict_types=1);

require __DIR__ . '/../src/Math.php';

use PHPUnit\Framework\TestCase;

class MathTest extends TestCase {

  public function testFibonacciIsIndexNegativeThrowsException(): void {
    $this->expectException(InvalidArgumentException::class);

    Math::fibonacci(-1);
  }

  public function testFibonacciIsIndex2Value1(): void {
    $this->assertEquals(
      1,
      Math::fibonacci(2)
    );
  }

  public function testFibonacciIsIndex15Value610(): void {
    $this->assertEquals(
      610,
      Math::fibonacci(15)
    );
  }

}

