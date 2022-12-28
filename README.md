# A Directus 9 SDK for Laravel
This package makes it easier to use [alantiller/directus-php-sdk](https://github.com/alantiller/directus-php-sdk) with Laravel.

Just install the package by running
```
composer require marnick-s/directus9-laravel
```
and put this in your .env:
```
DIRECTUS_URL=https://directus.example.com
DIRECTUS_ACCESS_TOKEN=your-static-access-token-here
```
`DIRECTUS_ACCESS_TOKEN` is optional.

Then, you can use it like this:
```
$api = new Directus();
$posts = $api->get_items('posts');
```

or, you can use the helper function:
```
$posts = directus()->get_items('posts');
```

See [this readme](https://github.com/alantiller/directus-php-sdk#items) for all the available methods.
