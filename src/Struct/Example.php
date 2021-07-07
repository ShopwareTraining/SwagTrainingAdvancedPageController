<?php declare(strict_types=1);

namespace SwagTraining\AdvancedPageController\Struct;

use Shopware\Core\Framework\Struct\Struct;

class Example extends Struct
{
    private string $name;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }
}
