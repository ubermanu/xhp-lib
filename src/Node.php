<?php

namespace Ubermanu\XhpLib;

abstract class Node implements XHPElement
{
    /**
     * @var array
     */
    protected $attributes = [];

    /**
     * @var array
     */
    protected $children = [];

    public function __construct($attributes, $children)
    {
        $this->attributes = $attributes;
        $this->children = $children;
    }

    /**
     * @param Node|string $child
     * @return $this
     */
    public function appendChild($child): Node
    {
        $this->children[] = $child;
        return $this;
    }

    /**
     * @param Node|string $child
     * @return $this
     */
    public function prependChild($child): Node
    {
        array_unshift($this->children, $child);
        return $this;
    }

    /**
     * @return array
     */
    public function getChildren(): array
    {
        return $this->children;
    }

    /***
     * @return string
     */
    abstract public function __toString();
}
