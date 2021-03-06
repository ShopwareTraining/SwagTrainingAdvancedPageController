<?php declare(strict_types=1);

namespace SwagTraining\AdvancedPageController\Storefront\Page;

use Shopware\Core\System\SalesChannel\SalesChannelContext;
use Shopware\Storefront\Page\GenericPageLoaderInterface;
use SwagTraining\AdvancedPageController\Struct\Example;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class ExampePageLoader
 * @package SwagTraining\AdvancedPageController\Storefront\Controller
 */
class ExampePageLoader
{
    /**
     * @var GenericPageLoaderInterface
     */
    private GenericPageLoaderInterface $genericPageLoader;

    /**
     * ExampePageLoader constructor.
     * @param GenericPageLoaderInterface $genericPageLoader
     */
    public function __construct(
        GenericPageLoaderInterface $genericPageLoader
    ) {
        $this->genericPageLoader = $genericPageLoader;
    }

    /**
     * @param Request $request
     * @param SalesChannelContext $context
     * @return ExamplePage
     */
    public function load(Request $request, SalesChannelContext $context): ExamplePage
    {
        $page = $this->genericPageLoader->load($request, $context);
        $page = ExamplePage::createFrom($page);

        $metaInformation = $page->getMetaInformation();
        $metaInformation->setMetaTitle('Hello World');

        $exampleStruct = new Example();
        $exampleStruct->setName('World');
        $page->setExample($exampleStruct);

        return $page;
    }
}
