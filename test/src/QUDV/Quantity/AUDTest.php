<?php
namespace QUDV\Quantity;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2014-09-27 at 21:42:07.
 */
class AUDTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var AUD
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new AUD("5.12");
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }

    /**
     * @covers QUDV\Quantity\AUD::unit
     * @todo   Implement testUnit().
     */
    public function testUnit()
    {
       $obj = $this->object->unit();
        if ($obj instanceof \QUDV\Unit\AUD) {
            $this->assertTrue(TRUE);
        } else {
            $this->assertTrue(FALSE);
        }
    }

    /**
     * @covers QUDV\Quantity\AUD::quantityKind
     * @todo   Implement testQuantityKind().
     */
    public function testQuantityKind()
    {
        $obj = $this->object->quantityKind();
        if($obj instanceof \QUDV\QuantityKind\Money) {
            $this->assertTrue(TRUE);
        } else {
            $this->assertTrue(FALSE);
        }
    }

    /**
     * @covers QUDV\Quantity\AUD::add
     * @todo   Implement testAdd().
     */
    public function testAdd()
    {
        $v = $this->object->add(new AUD(5));
        $this->assertEquals($v->getValue(), 10.12);
    }

    public function testReturnType()
    {
        $v = $this->object->add(new AUD(5));
        $this->assertInstanceOf("\QUDV\Quantity\AUD", $v);
    }

    /**
     * @covers QUDV\Quantity\AUD::minus
     * @todo   Implement testMinus().
     */
    public function testMinus()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers QUDV\Quantity\AUD::multiply
     * @todo   Implement testMultiply().
     */
    public function testMultiply()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers QUDV\Quantity\AUD::divide
     * @todo   Implement testDivide().
     */
    public function testDivideAndSpread()
    {
        $result = $this->object->divideAndSpread(133,30);
        $total = new AUD(0);
        foreach ($result as $value) {
            $init = $value->add($total);
            $total = $init;
        }
        $this->assertEquals(5.12, $total->getValue());
    }

    public function testCompare()
    {
        $aud = new AUD("5.12");
        $r = $aud->compare($this->object);
        $this->assertEquals(0, $r);

    }
}
