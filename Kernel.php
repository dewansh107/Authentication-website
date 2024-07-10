<?php 
protected $routeMiddleware = [
    // ...
    'disable.back.btn' => \App\Http\Middleware\DisableBackBtn::class,
    ];
?>