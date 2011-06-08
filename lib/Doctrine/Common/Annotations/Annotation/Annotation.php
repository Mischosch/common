<?php

namespace Doctrine\Common\Annotations\Annotation;

/**
 * Marker interface for annotations.
 *
 * This interface _MUST_ be implemented by all annotation classes.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
interface Annotation
{
    const TARGET_ALL      = 'all';
    const TARGET_CLASS    = 'class';
    const TARGET_METHOD   = 'method';
    const TARGET_PROPERTY = 'property';

    /**
     * Returns an array with allowed usage targets.
     *
     * The array _keys_ must be one of the class constants. The value must
     * always be Boolean true.
     *
     * @return array
     */
    function getTargets();
}