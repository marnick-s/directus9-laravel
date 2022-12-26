<?php

namespace Slations\DirectusSdk\Laravel;

if (! function_exists('directus')) {
    function directus(?string $connection = null)
    {
        return resolve('directus', ['connection' => $connection]);
    }
}
