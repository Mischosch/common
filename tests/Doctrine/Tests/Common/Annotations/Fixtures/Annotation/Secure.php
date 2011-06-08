<?php

namespace Doctrine\Tests\Common\Annotations\Fixtures\Annotation;

use Doctrine\Common\Annotations\Annotation\Annotation;

class Secure implements Annotation
{
    private $roles;

    public function __construct(array $values)
    {
        if (is_string($values['value'])) {
            $values['value'] = array($values['value']);
        }

        $this->roles = $values['value'];
    }

    public function getTargets()
    {
        return self::TARGET_METHOD;
    }
}