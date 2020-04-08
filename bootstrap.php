<?php

if (!function_exists('asset')) {
    function asset($file) {
        return PhatKoala\Asset::file($file);
    }
}

if (!function_exists('entrypoint')) {
    function entrypoint($name) {
        return PhatKoala\Asset::entrypoint($name);
    }
}