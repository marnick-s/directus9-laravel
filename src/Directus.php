<?php

namespace Marnick\Directus9Laravel;

use Exception;
use Slations\DirectusSdk\Directus as DirectusPHP;

class Directus extends DirectusPHP
{
    public function __construct()
    {
        $base_url = env('DIRECTUS_URL', 'https://database.account.directus.io');
        $token = env('DIRECTUS_ACCESS_TOKEN', '');

        parent::__construct($base_url, '');

        if (!empty($token)) {
            $this->auth_token($token);
        }
    }
}
