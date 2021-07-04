<?php declare(strict_types=1);

namespace Swag\ExampleAdvancedPageController\Storefront\Page;

use Shopware\Storefront\Page\Page;
use Swag\ExampleAdvancedPageController\Struct\Example;

class ExamplePage extends Page
{
    private Example $example;

    /**
     * @return Example
     */
    public function getExample(): Example
    {
        return $this->example;
    }

    /**
     * @param Example $example
     */
    public function setExample(Example $example): void
    {
        $this->example = $example;
    }
}
