<?php
declare(strict_types=1);


use PHPUnit\Framework\TestCase;

class EnvTest extends TestCase {
  public function testEnv(): void {
    $this->assertEquals(
      'production',
      getenv('BUILD_ENV')
    );
  }
}

