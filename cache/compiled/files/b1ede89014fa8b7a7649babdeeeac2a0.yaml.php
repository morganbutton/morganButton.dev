<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/wamp64/www/moDev/user/config/themes/typhoon.yaml',
    'modified' => 1625183681,
    'data' => [
        'enabled' => true,
        'external_in_new_tab' => false,
        'append_site_title' => true,
        'custom_logo' => [
            'user/assets/typhoon/logo.svg' => [
                'name' => 'logo.svg',
                'type' => 'image/svg+xml',
                'size' => 14997,
                'path' => 'user/assets/typhoon/logo.svg'
            ]
        ],
        'custom_logo_strip_svg_style' => false,
        'custom_favicon' => [
            'user/assets/typhoon/logo.svg' => [
                'name' => 'logo.svg',
                'type' => 'image/svg+xml',
                'size' => 14997,
                'path' => 'user/assets/typhoon/logo.svg'
            ]
        ],
        'colors' => [
            'text_style' => 'text-gray-600 dark:text-gray-400',
            'brightness_lighter' => 20,
            'brightness_darker' => 20,
            'primary' => '#006AE1'
        ],
        'appearance' => [
            'theme' => 'system',
            'selector' => true,
            'storage' => true
        ],
        'body_classes' => NULL,
        'section_classes' => 'bg-white dark:bg-gray-900 py-8 md:py-24',
        'wrapper_spacing' => 'xl:container xl:mx-auto md:px-6 px-4',
        'menu' => [
            'primary_location' => 'sidebar',
            'primary_menu_levels' => 3,
            'mobile_nav' => true,
            'icon_classes' => 'hidden md:inline-block h-4 w-4 text-gray-500 mr-1',
            'login' => [
                'enabled' => false,
                'icon' => 'tabler/user.svg',
                'logged_in_display' => 'username',
                'logout_icon' => 'tabler/logout.svg'
            ],
            'langswitcher' => [
                'enabled' => true,
                'icon' => 'tabler/world.svg'
            ]
        ],
        'header_bar' => [
            'background' => 'auto',
            'custom_style' => 'linear-gradient(90deg, rgba(0,0,0,0.8) 0%, rgba(0,0,0,0.4) 100%)',
            'text' => 'auto'
        ],
        'hero' => [
            'display' => false,
            'overlay' => 'dark',
            'overlay_direction' => 'right',
            'alignment' => 'center',
            'image' => 'theme://images/headers/sea-and-sky.jpg',
            'custom' => '#3C4043',
            'padding' => 'pt-32 md:pt-40 lg:pt-48 xl:pt-56 pb-16 md:pb-20 lg:pb-24 xl:pb-32',
            'overlay_gradient' => [
                0 => '0.8',
                1 => '0.3'
            ]
        ],
        'footer' => [
            'menu_enabled' => true,
            'menu' => [
                0 => [
                    'label' => 'Terms & Conditions',
                    'link' => '#'
                ],
                1 => [
                    'label' => 'Privacy Policy',
                    'link' => '#'
                ]
            ],
            'social_enabled' => true,
            'social' => [
                0 => [
                    'network' => 'twitter',
                    'link' => 'https://twitter.com/getgrav'
                ],
                1 => [
                    'network' => 'github',
                    'link' => 'https://github.com/getgrav'
                ]
            ],
            'copyright' => '[Grav](https://getgrav.org?classes=hover:text-primary,font-bold) was 
[svg-icon icon="code" class="text-gray-700 dark:text-gray-400 w-4 h-4"] with
[svg-icon icon="heart" class="text-red-700 w-4 h-4 animate-pulse"] by 
[Trilby Media, LLC](https://trilby.media?classes=hover:text-primary,font-bold)
'
        ],
        'notices' => [
            0 => [
                'content' => 'An example **critical** message that should show up on homepage only',
                'enabled' => false,
                'only_homepage' => true,
                'type' => 'critical',
                'learn_more_link' => 'https://getgrav.org'
            ],
            1 => [
                'content' => 'An example **note** that should appear on all pages! No link..',
                'enabled' => false,
                'only_homepage' => false,
                'type' => 'note',
                'learn_more_link' => NULL
            ]
        ],
        'footer_page_route' => NULL,
        'notices_page_route' => NULL
    ]
];
