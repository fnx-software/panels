<?php
return [

    /*
    |--------------------------------------------------------------------------
    | Lavertia Path
    |--------------------------------------------------------------------------
    |
    | The default is `admin` but you can change it to whatever works best and
    | doesn't conflict with the routing in your application.
    |
    */

    'path' => env('LAVERTIA_PATH', 'admin'),
    /*
    |--------------------------------------------------------------------------
    | Lavertia Domain
    |--------------------------------------------------------------------------
    |
    | You may change the domain where Lavertia should be active. If the domain
    | is empty, all domains will be valid.
    |
    */

    'domain' => env('LAVERTIA_DOMAIN'),
    /*
    |--------------------------------------------------------------------------
    | Homepage URL
    |--------------------------------------------------------------------------
    |
    | This is the URL that Lavertia will redirect the user to when they click
    | on the sidebar's header.
    |
    */

    'home_url' => '/',

    /*
    |--------------------------------------------------------------------------
    | Brand Name
    |--------------------------------------------------------------------------
    |
    | This will be displayed on the login page and in the sidebar's header.
    |
    */

    'brand' => env('APP_NAME'),

    /*
    |--------------------------------------------------------------------------
    | Database notifications
    |--------------------------------------------------------------------------
    |
    | By enabling this feature, your users are able to open a slide-over within
    | the admin panel to view their database notifications.
    |
    */

    'database_notifications' => [
        'enabled' => false,
        'polling_interval' => '30s',
    ],

    /*
    |--------------------------------------------------------------------------
    | Broadcasting
    |--------------------------------------------------------------------------
    |
    | By uncommenting the Laravel Echo configuration, you may connect your
    | admin panel to any Pusher-compatible websockets server.
    |
    | This will allow your admin panel to receive real-time notifications.
    |
    */

    'broadcasting' => [
        // 'echo' => [
        //     'broadcaster' => 'pusher',
        //     'key' => env('VITE_PUSHER_APP_KEY'),
        //     'cluster' => env('VITE_PUSHER_APP_CLUSTER'),
        //     'wsHost' => env('VITE_PUSHER_HOST'),
        //     'wsPort' => env('VITE_PUSHER_PORT'),
        //     'wssPort' => env('VITE_PUSHER_PORT'),
        //     'forceTLS' => true,
        // ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Favicon
    |--------------------------------------------------------------------------
    |
    | This is the path to the favicon used for pages in the admin panel.
    |
    */

    'favicon' => null,

    /*
    |--------------------------------------------------------------------------
    | Default Filesystem Disk
    |--------------------------------------------------------------------------
    |
    | This is the storage disk Lavertia will use to put media. You may use any
    | of the disks defined in the `config/filesystems.php`.
    |
    */

    'default_filesystem_disk' => env('LAVERTIA_FILESYSTEM_DRIVER', 'public'),
];