SSO Helper
======

> SSO 登录助手

## Requiments

- Laravel >= 8.*
- WordPress >= 4.6

## Installation

- Copy "wl-bootstrap" folder into "wp-content/plugins"
- Define Laravel source code path in "wp-config.php" as a constant:

```
define('LARAVEL_PATH', '/srv/www/laravel-example-project'); // Make sure this is pointed to same server
```

## Usage

You can use all codes in your Laravel project, build Single Sign On with less effort on same/subdomain and so on... 

```php
<?php

// Helper
$array = array_add(['name' => 'Desk'], 'price', 100);

// Session
session(['chairs' => 7, 'instruments' => 3]);

// Authentication
Auth::check();

// Query Builder
$users = DB::table('users')->get();

// Eloquent
$flights = App\Flight::where('active', 1)
               ->orderBy('name', 'desc')
               ->take(10)
               ->get();

``` 
