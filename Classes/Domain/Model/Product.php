<?php

namespace T3DD14\Stock\Domain\Model;
use TYPO3\CMS\Extbase\DomainObject\AbstractDomainObject;

/**
 * Class Product
 * @package T3DD14\Stock\Domain\Model\Product
 */
class Product extends AbstractDomainObject {

    /**
     * @var string
     */
    protected $title = '';

    /**
     * @var int
     */
    protected $size = 0;

    /**
     * @return string
     */
    public function getTitle() {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle($title = '') {
        $this->title = $title;
    }

    /**
     * @param int $size
     * @throws \InvalidArgumentException
     */
    public function setSize($size = 0) {
        if($size < 0) {
            throw new \InvalidArgumentException(
                '$size must be >= 0, but actually is: ' . $size,
                1403347803
            );
        }
        $this->size = $size;
    }

}