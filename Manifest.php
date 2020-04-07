<?php

declare(strict_types=1);

namespace PhatKoala\Asset;

class Manifest
{
    private static $manifest;

    public static function manifest()
    {
        if (is_null(self::$manifest)) {
            self::$manifest = json_decode(file_get_contents(sprintf('%s/build/manifest.json', getcwd())), true);;
        }

        return self::$manifest;
    }

    public static function file($file)
    {
        $manifest = self::manifest();

        if (isset($manifest[$file])) {
            return $manifest[$file];
        }

        return null;
    }
}
