<?php

namespace Doctrine\Tests\Common\Annotations\Fixtures;

use Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
use Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;

/**
 * @Secure("FOO")
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
class AnnotationTargetTestClass
{
    /**
     * @Route("BAR")
     */
    private $routeNotOnProperty;

    /**
     * @Route(@Template("BAZ"))
     */
    public function nestedAnnotation()
    {
    }
}