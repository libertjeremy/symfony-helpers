<?php

namespace LibertJeremy\Symfony\Helpers\Controller\Traits;

use LibertJeremy\Symfony\Helpers\Controller\Interfaces\ControllerWithTwigInterface;
use LibertJeremy\Symfony\Helpers\Traits\TwigAwareTrait;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\HttpFoundation\Response;

/**
 * @see ControllerWithTwigInterface
 */
trait TwigTrait
{
    use TwigAwareTrait;

    /**
     * Returns a rendered view.
     *
     * Forms found in parameters are auto-cast to form views.
     */
    protected function renderView(string $view, array $parameters = []): string
    {
        foreach ($parameters as $k => $v) {
            if ($v instanceof FormInterface) {
                $parameters[$k] = $v->createView();
            }
        }

        return $this->twig->render($view, $parameters);
    }

    /**
     * Renders a view.
     *
     * If an invalid form is found in the list of parameters, a 422 status code is returned.
     * Forms found in parameters are auto-cast to form views.
     */
    protected function render(string $view, array $parameters = [], Response $response = null): Response
    {
        $content = $this->renderView($view, $parameters);
        $response ??= new Response();

        if (200 === $response->getStatusCode()) {
            foreach ($parameters as $v) {
                if ($v instanceof FormInterface && $v->isSubmitted() && !$v->isValid()) {
                    $response->setStatusCode(422);
                    break;
                }
            }
        }

        $response->setContent($content);

        return $response;
    }
}
