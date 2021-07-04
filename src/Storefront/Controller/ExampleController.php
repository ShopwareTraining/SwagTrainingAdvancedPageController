<?php declare(strict_types=1);

namespace Swag\ExampleAdvancedPageController\Storefront\Controller;

use Shopware\Core\Framework\Routing\Annotation\RouteScope;
use Shopware\Core\System\SalesChannel\SalesChannelContext;
use Shopware\Storefront\Controller\StorefrontController;
use Swag\ExampleAdvancedPageController\Storefront\Page\ExampePageLoader;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class ExampleController
 * @RouteScope(scopes={"storefront"})
 */
class ExampleController extends StorefrontController
{
    private ExampePageLoader $examplePageLoader;

    /**
     * ExampleController constructor.
     * @param ExampePageLoader $examplePageLoader
     */
    public function __construct(
        ExampePageLoader $examplePageLoader
    ) {
        $this->examplePageLoader = $examplePageLoader;
    }

    /**
     * @Route("/example/advanced", name="frontend.example.advanced", methods={"GET"})
     */
    public function index(Request $request, SalesChannelContext $salesChannelContext): Response
    {
        $page = $this->examplePageLoader->load($request, $salesChannelContext);
        return $this->renderStorefront(
            '@SwagExampleAdvancedPageController/storefront/page/example-advanced.html.twig',
            ['page' => $page]
        );
    }
}
