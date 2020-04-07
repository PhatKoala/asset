<?php

if (!function_exists('asset')) {
    function asset($file) {
        return PhatKoala\Asset\Manifest::file($file);
    }
}

if (!function_exists('entrypoint')) {
    function asset($name) {
        return PhatKoala\Asset\Entrypoint::entrypoint($name);
    }
}