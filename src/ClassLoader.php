<?php

namespace PhpLang\XhpLib;

class ClassLoader
{
    /**
     * @var array
     */
    protected $map;

    /**
     * Construct a new autoloader.
     *
     * Takes an optional initial map, as an
     * associative array from ":xhp-prefix" to "path/"
     * similar to Composer's PSR-4 autoloader.
     */
    public function __construct(array $map = [])
    {
        $this->map = $map;
    }

    /**
     * Add an additional path mapping
     *
     * @param string $prefix - XHP namespace prefix (e.g. ":foo")
     * @param string $path - Filesystem path (e.g. "tags/")
     * @return $this
     */
    public function add(string $prefix, string $path): ClassLoader
    {
        $this->map[$prefix] = $path;
        return $this;
    }

    /**
     * Remove a previously added mapping
     *
     * @param string $prefix - XHP namespace prefix (e.g. ":foo")
     * @return $this
     */
    public function remove(string $prefix): ClassLoader
    {
        unset($this->map[$prefix]);
        return $this;
    }

    /**
     * Enable SPL Autoload hook
     *
     * @param bool $prepend - Add loader to start or end
     * @return bool
     */
    public function register(bool $prepend = false): bool
    {
        return spl_autoload_register([$this, 'loadClass'], true, $prepend);
    }

    /**
     * Disable SPL Autoload hook
     * @return bool
     */
    public function unregister(): bool
    {
        return spl_autoload_unregister([$this, 'loadClass']);
    }

    /**
     * SPL Autoload callback
     * @param $class
     * @return bool
     */
    public function loadClass($class): bool
    {
        if ($filename = $this->findClass($class)) {
            require $filename;
            return true;
        }

        return false;
    }

    /**
     * Resolve a mangled XHP classname to a filepath
     *
     * @param string $class - Raw (mangled) classname (e.g. "xhp_foo__bar__baz")
     * @return string|false - Path to tag definition, or FALSE on unknown
     */
    public function findClass(string $class)
    {
        $xhpname = ':' . self::unmangle($class);

        if ($xhpname === ':') {
            return false;
        }

        foreach ($this->map as $prefix => $path) {
            if (($prefix === $xhpname) || !strncasecmp($prefix . ':', $xhpname, strlen($prefix) + 1)) {
                $suffix = substr($xhpname, strlen($prefix));
                $filename = $path . str_replace(':', '/', $suffix) . '.php';
                if (file_exists($filename)) {
                    return $filename;
                }
            }
        }

        return false;
    }

    /**
     * Translate a mangled XHP classname to a user-friendly tag
     *
     * @param string $class - Mangled name (e.g. "xhp_foo__bar__baz")
     * @return string - Demangled name (e.g. "foo:bar:baz")
     */
    public static function unmangle(string $class)
    {
        if (strncmp('xhp_', $class, 4)) {
            return false;
        }

        return str_replace('__', ':', substr($class, 4));
    }

    /**
     * Translate a user-friendly tagname to a mangled classname
     *
     * @param string $tag - Demangled name (e.g. "foo:bar:baz")
     * @return string - Mangled name (e.g. "xhp_foo__bar__baz")
     */
    public static function mangle(string $tag): string
    {
        return 'xhp_' . str_replace(':', '__', $tag);
    }
}
