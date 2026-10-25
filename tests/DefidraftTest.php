<?php
/**
 * Tests for DefiDraft
 */

use PHPUnit\Framework\TestCase;
use Defidraft\Defidraft;

class DefidraftTest extends TestCase {
    private Defidraft $instance;

    protected function setUp(): void {
        $this->instance = new Defidraft(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Defidraft::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
