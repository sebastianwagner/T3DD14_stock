<?php

namespace T3DD14\Stock\Tests\Unit\Domain\Model;


use TYPO3\CMS\Core\Tests\UnitTestCase;
use T3DD14\Stock\Domain\Model\Product;

/**
 * Class ProductTest
 * test case
 *
 * @package T3DD14\Stock\Tests\Unit\Domain\Model
 */
class ProductTest extends UnitTestCase {

    /**
     * @var Product
     */
    protected $subject = NULL;

    /**
     *
     */
    public function setUp() {
        $this->subject = new Product();
    }

    /**
     *
     */
    public function tearDown() {
        unset($this->subject);
    }

    /**
     * @test
     */
    public function titleInitiallyIsEmpty() {
        $this->assertSame(
            $this->subject->getTitle(),
            ''
        );
    }

    /**
     * @test
     */
    public function titleSetterWorks() {
        $title = 'foo';
        $this->subject->setTitle($title);

        $this->assertSame(
            $this->subject->getTitle(),
            $title
        );
    }

    /**
     * @test
     */
    public function setSizeNotThrowsException() {
        $this->subject->setSize(0);
    }

}