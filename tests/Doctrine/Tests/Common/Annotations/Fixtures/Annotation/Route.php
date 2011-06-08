<?php

namespace Doctrine\Tests\Common\Annotations\Fixtures\Annotation;

use Doctrine\Common\Annotations\Annotation\Annotation;

class Route implements Annotation
{
    private $pattern;
    private $name;

    public function __construct(array $values)
    {
        $this->pattern = $values['value'];
        $this->name    = isset($values['name'])? $values['name'] : null;
    }

    public function getTargets()
    {
        return self::TARGET_METHOD | self::TARGET_CLASS;
    }
}