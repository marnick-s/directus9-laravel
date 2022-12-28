<?php

namespace Marnick\Directus9Laravel;

if (! function_exists('directus')) {
    function directus()
    {
        return new Directus;
    }
}
