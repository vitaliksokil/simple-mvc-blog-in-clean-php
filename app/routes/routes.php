<?php
return [
    // PageController
    '/' => [
        'controller' => 'PageController',
        'action' => 'index'
    ],
    '/about' => [
        'controller' => 'PageController',
        'action' => 'about'
    ],
    '/login' => [
        'controller' => 'PageController',
        'action' => 'login'
    ],
    '/register' => [
        'controller' => 'PageController',
        'action' => 'register'
    ],
    '/admin' => [
        'controller' => 'PageController',
        'action' => 'admin'
    ],
    '/profile' => [
        'controller' => 'PageController',
        'action' => 'profile'
    ],



    // UserController
    '/user/register' =>[
        'controller' => 'UserController',
        'action' => 'registerUser'
    ],
    '/user/login' =>[
        'controller' => 'UserController',
        'action' => 'loginUser'
    ],
    '/user/logout' => [
        'controller' => 'UserController',
        'action' => 'logoutUser'
    ],

    // PostController
    '/post/(\d+)' => [
        'controller' => 'PostController',
        'action' => 'show'
    ],
    '/posts' => [
        'controller' => 'PostController',
        'action' => 'showAllPosts'
    ],
    '/post/create' => [
        'controller' => 'PostController',
        'action' => 'create'
    ],
    '/post/update/(\d+)' => [
        'controller' => 'PostController',
        'action' => 'update'
    ],
    '/post/delete/(\d+)' => [
        'controller' => 'PostController',
        'action' => 'delete'
    ],
// admin panel
    '/admin/post/create' => [
        'controller' => 'PostController',
        'action' => 'adminPostCreate'
    ],
    '/admin/post/all' => [
        'controller' => 'PostController',
        'action' => 'adminPostAll'
    ],
    '/admin/post/update/(\d+)' => [
        'controller' => 'PostController',
        'action' => 'adminPostUpdate'
    ],
];
