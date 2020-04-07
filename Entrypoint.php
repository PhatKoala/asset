<?php

declare(strict_types=1);

namespace PhatKoala\Asset;

class Entrypoint
{
    private static $entrypoints;

    public static function entrypoints()
    {
        if (is_null(self::$entrypoints)) {
            self::$entrypoints = json_decode(file_get_contents(sprintf('%s/build/entrypoints.json', getcwd())), true);;
        }

        return self::$entrypoints;
    }

    public static function entrypoint($name)
    {
        $entrypoints = self::entrypoints();

        if (isset($entrypoints[$name])) {
            return $entrypoints[$name];
        }

        return null;
    }
}
