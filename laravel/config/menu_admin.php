<?php
return [
    //---manage Product---
    [
        'name' => 'Product',
        'icon' => 'fa-shopping-cart',
        // 'route' => 'product.index',
        'item' => [
            [
                'route' => 'product.index',
                'name' => 'All Product'
            ]
        ]
    ],
    //---manage Category---
    [
        'name' => 'Category',
        'icon' => 'fa-shopping-cart',
        // 'route' => 'category.index',
        'item' => [
            [
                'route' => 'category.index',
                'name' => 'All Category'
            ],
            [
                'route' => 'category.create',
                'name' => 'Add Category'
            ]
        ]
    ],
    //---manage Custumer---
    [
        'name' => 'Custumer',
        'icon' => 'fa-user',
        // 'route' => 'category.index',
        'item' => [
            [
                'route' => 'custumer.index',
                'name' => 'All Category'
            ]
            // [
            //     'route' => 'custumer.create',
            //     'name' => 'Add Custumer'
            // ]
        ]
    ],
    //---manage User---
    [
        'name' => 'User',
        'icon' => 'fa-lock',
        // 'route' => 'category.index',
        'item' => [
            [
                'route' => 'user.index',
                'name' => 'All User'
            ],
            // [
            //     'route' => 'user.create',
            //     'name' => 'Add User'
            // ]
        ]
    ]


];
