<?php

namespace Marnick\Directus9Laravel;

use Slations;
use Illuminate\Support\Arr;

class Directus extends Slations\DirectusSdk\Directus
{
    private static array $instances = [];

    public function __construct(?string $connection = null)
    {
        if (is_null($connection)) {
            $connection = config('directus.default', 'default');
        }

        $config = config('directus.connections.' . $connection, []);

        $base_url = Arr::get($config, 'base_url', '');
        $auth_prefix = Arr::get($config, 'auth_prefix', '');
        $token = Arr::get($config, 'auth_token', null);

        parent::__construct($base_url, $auth_prefix);

        $this->auth_token($token);
    }

    public static function getInstance($connection = null)
    {
        if (is_array($connection) && isset($connection['connection'])) {
            $connection = $connection['connection'];
        }
        elseif(is_array($connection))
        {
            $connection = null;
        }

        if (!isset(static::$instances[$connection])) {
            static::$instances[$connection] = new static($connection);
        }
        return static::$instances[$connection];
    }
}
