<?php

if (!function_exists('asset')) {
    function asset($file) {
        return PhatKoala\Asset::file($file);
    }
}

if (!function_exists('entrypoint')) {
    function asset($name) {
        return PhatKoala\Asset::entrypoint($name);
    }
}