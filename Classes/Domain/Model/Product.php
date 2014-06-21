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
    protected $title;

    public function getTitle() {
        return $this->title;
    }

}