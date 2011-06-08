<?php

namespace Doctrine\Tests\Common\Annotations\Fixtures\Annotation;

use Doctrine\Common\Annotations\Annotation\Annotation;

class Template implements Annotation
{
    private $name;

    public function __construct(array $values)
    {
        $this->name = isset($values['value']) ? $values['value'] : null;
    }

    public function getTargets()
    {
        return self::TARGET_METHOD;
    }
}