<?php

namespace Ubermanu\XhpLib;

use Ubermanu\XhpLib\Exception\XHPRenderArrayException;

/**
 * A fragment can be used to render a list of nodes.
 * It is useful when you want to render a list of nodes without a parent.
 */
class Fragment extends Node
{
    /**
     * @inheritDoc
     */
    public function __construct($attributes, $children)
    {
        parent::__construct([], $children);
    }

    /**
     * @return string
     * @throws XHPRenderArrayException
     */
    public function __toString()
    {
        $out = '';
        foreach ($this->children as $child) {
            if (is_array($child)) {
                throw new XHPRenderArrayException('Can not render array!');
            }
            $out .= (string)$child;
        }
        return $out;
    }
}
