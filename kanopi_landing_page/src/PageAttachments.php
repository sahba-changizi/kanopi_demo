<?php

namespace Drupal\mybusinesslandingpage;

use Drupal\Core\PageCache\ResponsePolicy\KillSwitch;
use Drupal\Core\PageCache\ResponsePolicyInterface;
use Drupal\Core\Render\AttachmentsInterface;
use Drupal\Core\Render\BubbleableMetadata;
use Drupal\Core\Render\HtmlResponse;
use Drupal\Core\Render\MainContent\MainContentRendererInterface;
use Drupal\Core\Routing\RouteMatchInterface;
use Symfony\Component\HttpFoundation\RequestStack;

/**
 * Attaches CSS and JavaScript assets to pages.
 */
class PageAttachments implements AttachmentsInterface
{

    /**
     * The request stack.
     *
     * @var \Symfony\Component\HttpFoundation\RequestStack
     */
    protected $requestStack;

    /**
     * The main content renderer.
     *
     * @var \Drupal\Core\Render\MainContent\MainContentRendererInterface
     */
    protected $mainContentRenderer;

    /**
     * The response policy.
     *
     * @var \Drupal\Core\PageCache\ResponsePolicyInterface
     */
    protected $response;
}
