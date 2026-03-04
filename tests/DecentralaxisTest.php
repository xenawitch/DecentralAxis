<?php
/**
 * Tests for DecentralAxis
 */

use PHPUnit\Framework\TestCase;
use Decentralaxis\Decentralaxis;

class DecentralaxisTest extends TestCase {
    private Decentralaxis $instance;

    protected function setUp(): void {
        $this->instance = new Decentralaxis(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Decentralaxis::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
