<?php

namespace Ubermanu\XhpLib;

/**
 * The necessary interface for all XHP elements.
 * When the XHP parser encounters an element, it will assign the attributes
 * and children to the constructor.
 * Then it will render the element by calling __toString().
 * @internal
 */
interface XHPElement
{
    /**
     * @param array $attributes
     * @param array $children
     */
    public function __construct($attributes, $children);

    /**
     * @return string
     */
    public function __toString();
}
