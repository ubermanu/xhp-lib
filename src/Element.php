<?php

namespace Ubermanu\XhpLib;

use Ubermanu\XhpLib\Exception\XHPInvalidAttributeNameException;
use Ubermanu\XhpLib\Exception\XHPRenderArrayException;

/**
 * The base class for all XHP elements.
 * You can extend this class to create your own XHP elements.
 */
abstract class Element extends Node
{
    /**
     * @var string
     */
    protected $tagName = 'div';

    /**
     * If TRUE, the element will be rendered as a self-closing tag.
     * Note that the children won't be rendered.
     * @var bool
     */
    protected $omitEndTag = false;

    /**
     * @return string
     */
    public function getTagName(): string
    {
        return $this->tagName;
    }

    /**
     * @param string $attr
     * @return mixed|null
     */
    public function getAttribute(string $attr)
    {
        return $this->attributes[$attr] ?? null;
    }

    /**
     * @return array
     */
    public function getAttributes(): array
    {
        return $this->attributes;
    }

    /**
     * @param string $attr
     * @param mixed $val
     * @return void
     * @throws XHPInvalidAttributeNameException
     */
    public function setAttribute(string $attr, $val)
    {
        if (!strlen($attr) || !preg_match('/^[a-zA-Z]/', $attr)) {
            throw new XHPInvalidAttributeNameException('Invalid attribute name: ' . $attr);
        }
        $this->attributes[$attr] = $val;
    }

    /**
     * @param string $attr
     * @return bool
     */
    public function hasAttribute(string $attr): bool
    {
        return isset($this->attributes[$attr]);
    }

    /**
     * @param string $attr
     * @return void
     */
    public function removeAttribute(string $attr)
    {
        unset($this->attributes[$attr]);
    }

    /**
     * @return bool
     */
    public function hasAttributes(): bool
    {
        return !empty($this->attributes);
    }

    /**
     * TODO: Implement this
     * @param string $selector
     * @return Node[]
     */
    public function querySelectorAll(string $selector): array
    {
        return array_filter($this->children, function ($child) use ($selector) {
            return $child instanceof Node;
        });
    }

    /**
     * TODO: Implement this
     * @param string $selector
     * @return Node|null
     */
    public function querySelector(string $selector)
    {
        foreach ($this->children as $child) {
            if ($child instanceof Node) {
                return $child;
            }
        }
        return null;
    }

    /**
     * @return string
     * @throws XHPRenderArrayException
     */
    public function __toString()
    {
        $out = '<' . $this->tagName;
        foreach ($this->attributes as $attr => $val) {
            if (is_array($val) || is_object($val)) {
                $out .= ' ' . $attr . '="' . \json_encode($val) . '"';
            } else if (is_bool($val)) {
                if ($val) {
                    $out .= ' ' . $attr;
                }
            } else {
                $out .= ' ' . $attr . '="' . htmlspecialchars($val) . '"';
            }
        }
        $out .= '>';
        if ($this->omitEndTag) {
            return $out;
        }
        if (empty($this->children)) {
            return $out . '/>';
        }
        foreach ($this->children as $child) {
            if (is_array($child)) {
                throw new XHPRenderArrayException('Can not render array!');
            }
            $out .= (string)$child;
        }
        $out .= '</' . $this->tagName . '>';
        return $out;
    }
}
