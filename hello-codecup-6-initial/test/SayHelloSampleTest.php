<?php

use PHPUnit\Framework\TestCase;

final class SayHelloSampleTest extends TestCase
{
    private static string $answerFilePath = __DIR__ . '/../sayHello.php';
    private static bool $initialized = false;

    public function setUp(): void
    {
        if (self::$initialized) {
            return;
        }
        ob_start();
        require_once self::$answerFilePath;
        ob_get_clean();
        self::$initialized = true;
    }

    public function testSmallArray1()
    {
        $this->expectOutputString("Hello CodeCup 6!\n");
        sayHello(['Hello', 'puCedoC', '6!'], 1);
    }

    public function testSmallArray2()
    {
        $this->expectOutputString("Salam CodeCup 6!\n");
        sayHello(['malaS', 'CodeCup', '6!'], 0);
    }
}
