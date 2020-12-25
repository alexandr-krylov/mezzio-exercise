<?php

declare(strict_types=1);

namespace App\Handler;

use Mezzio\Template\TemplateRendererInterface;
use Psr\Container\ContainerInterface;

class DbAccessHandlerFactory
{
    public function __invoke(ContainerInterface $container) : DbAccessHandler
    {
        return new DbAccessHandler($container->get(TemplateRendererInterface::class));
    }
}
