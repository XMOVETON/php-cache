<?php

class Cache {

    /** @var array */
    protected static $files = [];

    /**
     * Get file modification time
     *
     * @return array
     */
    public static function get () {
        $cache = [];

        foreach (self::$files as $key => $value) {
            if (file_exists($value)) {
                $cache[$key] = filemtime($value);
            }
        }
        return $cache;
    }

    /**
     * add new file
     *
     * @param string $name
     * @param string $path
     * @return array
     */
    public static function add ($name, $path) {
        return (self::$files[$name] = $path);
    }
}