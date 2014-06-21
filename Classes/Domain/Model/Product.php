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

}