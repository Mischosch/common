<?php

namespace Doctrine\Common\Annotations\Annotation;

/**
 * Interface for annotations.
 *
 * This interface _MUST_ be implemented by all annotation classes.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
interface Annotation
{
    const TARGET_CLASS             = 1;
    const TARGET_METHOD            = 2;
    const TARGET_PROPERTY          = 4;
    const TARGET_NESTED_ANNOTATION = 8;
    const TARGET_ALL               = 15;

    /**
     * Returns the allowed usage targets as bitmask.
     *
     * @return integer
     */
    function getTargets();
}