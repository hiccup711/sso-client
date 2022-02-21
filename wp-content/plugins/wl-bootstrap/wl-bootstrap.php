<?php
/**
 * @package WL_Bootstrap
 * @version 1.0
 */
/*
Plugin Name: WL_Bootstrap
Description: 用户自动登录
Author: SongYuXuan
Version: 1.0
*/

function wl_bootstrap() {

    if (!is_user_logged_in() && $token = $_GET['token'] ?? false) {

        global $wpdb;

        $token_user = $wpdb->get_row($wpdb->prepare( "SELECT `tokenable_id` FROM `wp_personal_access_tokens` WHERE `token` = %s", $token));
        if(! is_object($token_user))
        {
            return;
        }
        $user = get_user_by('ID', $token_user->tokenable_id);
        // 登录
        wp_set_current_user($user->ID, $user->user_login);
        wp_set_auth_cookie($user->ID,true);
        do_action('wp_login', $user->user_login);
//        $request = new WP_Http;
//        $result = $request->request( 'http://usercenter.test/api/user', [
//            'method' => 'POST',
//            'headers' => [
//                'Accept' => "application/json",
//                'Authorization' => 'Bearer '.$token
//            ]
//        ]);
//        var_dump($result['body']);
//        die;
//        if(isset($result->errors['http_request_failed']))
//        {
//            throw new Error($result->errors['http_request_failed'][0]);
//        }

//        $result = json_decode($result['body']);
//
//        $user_login = $result->name; // 用户名
//
//        // 获取用户 id
//        $user = get_userdatabylogin($user_login);
//        $user_id = $user->ID;


    }
//    埋点备用，可以调用 usercenter 站点的方法和路由。
//    define('LARAVEL_PATH', 'C:\laragon\www\usercenter');
//
//    if (!defined('LARAVEL_PATH')) {
//        throw new Exception('LARAVEL_PATH is not configured.');
//    }
//
//    require LARAVEL_PATH . '/vendor/autoload.php';
//
//    $app = require_once LARAVEL_PATH . '/bootstrap/app.php';
//
//    $kernel = $app->make(\Illuminate\Contracts\Http\Kernel::class);
//    $request = \Illuminate\Http\Request::capture();
//
//    $app->instance('request', $request);
//    $kernel->bootstrap();
//
//    $response = (new \Illuminate\Routing\Pipeline($app))
//        ->send($request)
//        ->through([
//            \App\Http\Middleware\EncryptCookies::class,
//            \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
//            \Illuminate\Session\Middleware\StartSession::class
//        ])
//        ->then(function () {
//            return response('', 200, []);
//        });
//    // Set cookie from response headers
//    foreach ($response->headers->getCookies() as $cookie) {
//        if ($cookie->isRaw()) {
//            setrawcookie($cookie->getName(), $cookie->getValue(), $cookie->getExpiresTime(), $cookie->getPath(), $cookie->getDomain(), $cookie->isSecure(), $cookie->isHttpOnly());
//        } else {
//            setcookie($cookie->getName(), $cookie->getValue(), $cookie->getExpiresTime(), $cookie->getPath(), $cookie->getDomain(), $cookie->isSecure(), $cookie->isHttpOnly());
//        }
//    }
}

add_action('plugins_loaded', 'wl_bootstrap');
