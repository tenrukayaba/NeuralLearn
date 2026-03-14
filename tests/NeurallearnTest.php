<?php
/**
 * Tests for NeuralLearn
 */

use PHPUnit\Framework\TestCase;
use Neurallearn\Neurallearn;

class NeurallearnTest extends TestCase {
    private Neurallearn $instance;

    protected function setUp(): void {
        $this->instance = new Neurallearn(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Neurallearn::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
