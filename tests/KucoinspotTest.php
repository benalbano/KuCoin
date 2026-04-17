<?php
/**
 * Tests for KuCoinSpot
 */

use PHPUnit\Framework\TestCase;
use Kucoinspot\Kucoinspot;

class KucoinspotTest extends TestCase {
    private Kucoinspot $instance;

    protected function setUp(): void {
        $this->instance = new Kucoinspot(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Kucoinspot::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
