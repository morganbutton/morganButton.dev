<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/wamp64/www/moDev/user/themes/typhoon/blueprints.yaml',
    'modified' => 1625095586,
    'data' => [
        'name' => 'Typhoon',
        'version' => '2.1.1',
        'type' => 'theme',
        'slug' => 'typhoon',
        'premium' => true,
        'description' => 'Typhoon theme utilizing the Tailwind 2 CSS framework',
        'icon' => 'bolt',
        'author' => [
            'name' => 'Trilby Media, LLC',
            'email' => 'hello@trilby.media'
        ],
        'homepage' => 'https://getgrav.org/premium/typhoon',
        'demo' => 'https://demo.getgrav.org/typhoon/',
        'keywords' => 'grav, theme, tailwind, responsive, modern, premium',
        'bugs' => 'https://github.com/getgrav/grav-premium-issues/labels/typhoon',
        'docs' => 'https://getgrav.org/premium/typhoon/docs',
        'license' => 'https://getgrav.org/premium/license',
        'dependencies' => [
            0 => [
                'name' => 'grav',
                'version' => '>=1.6.31'
            ],
            1 => [
                'name' => 'color-tools',
                'version' => '>=1.0.0'
            ],
            2 => [
                'name' => 'svg-icons',
                'version' => '>=1.0.0'
            ],
            3 => [
                'name' => 'shortcode-core',
                'version' => '>=4.0.0'
            ]
        ],
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'typhoon_tabs' => [
                    'type' => 'tabs',
                    'style' => 'subtle',
                    'fields' => [
                        'typhoon_config_tab' => [
                            'type' => 'tab',
                            'title' => 'THEME_TYPHOON.ADMIN.CONFIGURATION',
                            'fields' => [
                                'section_appearance' => [
                                    'type' => 'section',
                                    'title' => 'THEME_TYPHOON.ADMIN.THEME_DEFAULTS',
                                    'underline' => true,
                                    'fields' => [
                                        'appearance.theme' => [
                                            'type' => 'select',
                                            'label' => 'THEME_TYPHOON.ADMIN.THEME',
                                            'help' => 'THEME_TYPHOON.ADMIN.THEME_HELP',
                                            'options' => [
                                                'system' => 'THEME_TYPHOON.ADMIN.SYSTEM',
                                                'light' => 'THEME_TYPHOON.ADMIN.LIGHT',
                                                'dark' => 'THEME_TYPHOON.ADMIN.DARK'
                                            ]
                                        ],
                                        'appearance.selector' => [
                                            'type' => 'toggle',
                                            'label' => 'THEME_TYPHOON.ADMIN.USER_SELECTOR',
                                            'help' => 'THEME_TYPHOON.ADMIN.USER_SELECTOR_HELP',
                                            'highlight' => 1,
                                            'default' => 1,
                                            'options' => [
                                                1 => 'PLUGIN_ADMIN.YES',
                                                0 => 'PLUGIN_ADMIN.NO'
                                            ],
                                            'validate' => [
                                                'type' => 'bool'
                                            ]
                                        ],
                                        'appearance.storage' => [
                                            'type' => 'toggle',
                                            'label' => 'THEME_TYPHOON.ADMIN.REMEMBER_SELECTION',
                                            'help' => 'THEME_TYPHOON.ADMIN.REMEMBER_SELECTION_HELP',
                                            'highlight' => 1,
                                            'default' => 1,
                                            'options' => [
                                                1 => 'PLUGIN_ADMIN.YES',
                                                0 => 'PLUGIN_ADMIN.NO'
                                            ],
                                            'validate' => [
                                                'type' => 'bool'
                                            ]
                                        ],
                                        'append_site_title' => [
                                            'type' => 'toggle',
                                            'label' => 'THEME_TYPHOON.ADMIN.APPEND_SITE_TITLE',
                                            'highlight' => 1,
                                            'default' => 1,
                                            'options' => [
                                                1 => 'PLUGIN_ADMIN.YES',
                                                0 => 'PLUGIN_ADMIN.NO'
                                            ],
                                            'validate' => [
                                                'type' => 'bool'
                                            ]
                                        ]
                                    ]
                                ],
                                'section_colors' => [
                                    'type' => 'section',
                                    'title' => 'THEME_TYPHOON.ADMIN.DEFAULT_COLORS',
                                    'underline' => true,
                                    'fields' => [
                                        'colors.text_style' => [
                                            'type' => 'text',
                                            'label' => 'THEME_TYPHOON.ADMIN.TEXT_COLOR',
                                            'help' => 'THEME_TYPHOON.ADMIN.TEXT_COLOR_HELP',
                                            'placeholder' => 'text-gray-500'
                                        ],
                                        'colors.primary' => [
                                            'type' => 'colorpicker',
                                            'label' => 'THEME_TYPHOON.ADMIN.PRIMARY_COLOR',
                                            'help' => 'THEME_TYPHOON.ADMIN.PRIMARY_COLOR_HELP',
                                            'default' => '#3085ee'
                                        ],
                                        'colors.brightness_lighter' => [
                                            'type' => 'range',
                                            'label' => 'THEME_TYPHOON.ADMIN.LIGHTER_BRIGHTNESS',
                                            'help' => 'THEME_TYPHOON.ADMIN.LIGHTER_BRIGHTNESS_HELP',
                                            'default' => 20,
                                            'validate' => [
                                                'min' => 0,
                                                'max' => 100,
                                                'step' => 5
                                            ]
                                        ],
                                        'colors.brightness_darker' => [
                                            'type' => 'range',
                                            'label' => 'THEME_TYPHOON.ADMIN.DARKER_BRIGHTNESS',
                                            'help' => 'THEME_TYPHOON.ADMIN.DARKER_BRIGHTNESS_HELP',
                                            'validate' => [
                                                'min' => 0,
                                                'max' => 100,
                                                'step' => 5
                                            ]
                                        ]
                                    ]
                                ],
                                'section_layout' => [
                                    'type' => 'section',
                                    'title' => 'THEME_TYPHOON.ADMIN.LAYOUT_DEFAULTS',
                                    'underline' => true,
                                    'fields' => [
                                        'body_classes' => [
                                            'type' => 'text',
                                            'label' => 'THEME_TYPHOON.ADMIN.BODY_CLASSES',
                                            'help' => 'THEME_TYPHOON.ADMIN.BODY_CLASSES_HELP'
                                        ],
                                        'wrapper_spacing' => [
                                            'type' => 'text',
                                            'label' => 'THEME_TYPHOON.ADMIN.WRAPPER_CLASSES',
                                            'help' => 'THEME_TYPHOON.ADMIN.WRAPPER_CLASSES_HELP',
                                            'default' => 'xl:container xl:mx-auto md:px-6 px-4'
                                        ],
                                        'section_classes' => [
                                            'type' => 'text',
                                            'label' => 'THEME_TYPHOON.ADMIN.SECTION_CLASSES',
                                            'help' => 'THEME_TYPHOON.ADMIN.SECTION_CLASSES_HELP',
                                            'default' => 'bg-white py-8 md:py-24'
                                        ]
                                    ]
                                ],
                                'section_menu' => [
                                    'type' => 'section',
                                    'title' => 'THEME_TYPHOON.ADMIN.MENU_CONFIGURATION',
                                    'underline' => true,
                                    'fields' => [
                                        'menu.primary_location' => [
                                            'type' => 'select',
                                            'label' => 'THEME_TYPHOON.ADMIN.PRIMARY_MENU_LOCATION',
                                            'help' => 'THEME_TYPHOON.ADMIN.PRIMARY_MENU_LOCATION_HELP',
                                            'default' => 'header',
                                            'options' => [
                                                'header' => 'THEME_TYPHOON.ADMIN.HEADER',
                                                'sidebar' => 'THEME_TYPHOON.ADMIN.SIDEBAR'
                                            ]
                                        ],
                                        'menu.primary_menu_levels' => [
                                            'type' => 'range',
                                            'label' => 'THEME_TYPHOON.ADMIN.PRIMARY_HEADER_LEVELS',
                                            'help' => 'THEME_TYPHOON.ADMIN.PRIMARY_HEADER_LEVELS_HELP',
                                            'config-default' => 'theme.typhoon.menu.primary_menu_levels',
                                            'validate' => [
                                                'min' => 0,
                                                'max' => 7,
                                                'step' => 1
                                            ]
                                        ],
                                        'menu.mobile_nav' => [
                                            'type' => 'toggle',
                                            'label' => 'THEME_TYPHOON.ADMIN.DISPLAY_MOBILE_NAVIGATION',
                                            'help' => 'THEME_TYPHOON.ADMIN.DISPLAY_MOBILE_NAVIGATION_HELP',
                                            'highlight' => 1,
                                            'default' => 1,
                                            'options' => [
                                                1 => 'PLUGIN_ADMIN.YES',
                                                0 => 'PLUGIN_ADMIN.NO'
                                            ],
                                            'validate' => [
                                                'type' => 'bool'
                                            ]
                                        ],
                                        'menu.icon_classes' => [
                                            'type' => 'text',
                                            'label' => 'THEME_TYPHOON.ADMIN.ICON_CLASSES',
                                            'help' => 'THEME_TYPHOON.ADMIN.ICON_CLASSES_HELP'
                                        ],
                                        'external_in_new_tab' => [
                                            'type' => 'toggle',
                                            'label' => 'THEME_TYPHOON.ADMIN.EXTERNAL_URLS_NEW_TAB',
                                            'highlight' => 0,
                                            'default' => 0,
                                            'options' => [
                                                1 => 'PLUGIN_ADMIN.YES',
                                                0 => 'PLUGIN_ADMIN.NO'
                                            ],
                                            'validate' => [
                                                'type' => 'bool'
                                            ]
                                        ]
                                    ]
                                ],
                                'section_login' => [
                                    'type' => 'section',
                                    'title' => 'THEME_TYPHOON.ADMIN.MENU_LOGIN_SECTION',
                                    'underline' => false,
                                    'fields' => [
                                        'menu.login.enabled' => [
                                            'type' => 'toggle',
                                            'label' => 'THEME_TYPHOON.ADMIN.ENABLE_LOGIN_MENU',
                                            'help' => 'THEME_TYPHOON.ADMIN.ENABLE_LOGIN_MENU_HELP',
                                            'highlight' => 1,
                                            'default' => 1,
                                            'options' => [
                                                1 => 'PLUGIN_ADMIN.YES',
                                                0 => 'PLUGIN_ADMIN.NO'
                                            ],
                                            'validate' => [
                                                'type' => 'bool'
                                            ]
                                        ],
                                        'menu.login.icon' => [
                                            'type' => 'text',
                                            'label' => 'THEME_TYPHOON.ADMIN.LOGIN_ICON',
                                            'help' => 'THEME_TYPHOON.ADMIN.LOGIN_ICON_HELP'
                                        ],
                                        'menu.login.logged_in_display' => [
                                            'type' => 'select',
                                            'label' => 'THEME_TYPHOON.ADMIN.LOGGED_IN_DISPLAY',
                                            'help' => 'THEME_TYPHOON.ADMIN.LOGGED_IN_DISPLAY_HELP',
                                            'default' => 'username',
                                            'options' => [
                                                'username' => 'Username',
                                                'fullname' => 'Full Name',
                                                'emaili' => 'Email Address'
                                            ]
                                        ],
                                        'menu.login.logout_icon' => [
                                            'type' => 'text',
                                            'label' => 'THEME_TYPHOON.ADMIN.LOGOUT_ICON',
                                            'help' => 'THEME_TYPHOON.ADMIN.LOGOUT_ICON_HELP'
                                        ]
                                    ]
                                ],
                                'section_langswitcher' => [
                                    'type' => 'section',
                                    'title' => 'THEME_TYPHOON.ADMIN.MENU_LANGSWITCHER_SECTION',
                                    'underline' => false,
                                    'fields' => [
                                        'menu.langswitcher.enabled' => [
                                            'type' => 'toggle',
                                            'label' => 'THEME_TYPHOON.ADMIN.ENABLE_LANGSWITCHER_MENU',
                                            'help' => 'THEME_TYPHOON.ADMIN.ENABLE_LANGSWITCHER_MENU_HELP',
                                            'highlight' => 1,
                                            'default' => 1,
                                            'options' => [
                                                1 => 'PLUGIN_ADMIN.YES',
                                                0 => 'PLUGIN_ADMIN.NO'
                                            ],
                                            'validate' => [
                                                'type' => 'bool'
                                            ]
                                        ],
                                        'menu.langswitcher.icon' => [
                                            'type' => 'text',
                                            'label' => 'THEME_TYPHOON.ADMIN.LANGSWITCHER_ICON',
                                            'help' => 'THEME_TYPHOON.ADMIN.LANGSWITCHER_ICON_HELP'
                                        ]
                                    ]
                                ],
                                'section_header_bar' => [
                                    'type' => 'section',
                                    'title' => 'THEME_TYPHOON.ADMIN.HEADER_BAR_DEFAULTS',
                                    'underline' => true,
                                    'fields' => [
                                        'custom_logo' => [
                                            'type' => 'file',
                                            'label' => 'THEME_TYPHOON.ADMIN.CUSTOM_LOGO',
                                            'description' => 'THEME_TYPHOON.ADMIN.CUSTOM_LOGO_DESC',
                                            'size' => 'large',
                                            'destination' => 'user://assets/typhoon',
                                            'multiple' => false,
                                            'accept' => [
                                                0 => 'image/*'
                                            ]
                                        ],
                                        'custom_logo_strip_svg_style' => [
                                            'type' => 'toggle',
                                            'label' => 'THEME_TYPHOON.ADMIN.STRIP_LOGO_SVG_STYLE',
                                            'help' => 'THEME_TYPHOON.ADMIN.STRIP_LOGO_SVG_STYLE_HELP',
                                            'highlight' => 0,
                                            'default' => 0,
                                            'options' => [
                                                1 => 'PLUGIN_ADMIN.YES',
                                                0 => 'PLUGIN_ADMIN.NO'
                                            ],
                                            'validate' => [
                                                'type' => 'bool'
                                            ]
                                        ],
                                        'custom_favicon' => [
                                            'type' => 'file',
                                            'label' => 'THEME_TYPHOON.ADMIN.CUSTOM_FAVICON',
                                            'description' => 'THEME_TYPHOON.ADMIN.CUSTOM_FAVICON_DESC',
                                            'size' => 'large',
                                            'destination' => 'user://assets/typhoon',
                                            'multiple' => false,
                                            'accept' => [
                                                0 => 'image/*'
                                            ]
                                        ],
                                        'header_bar.background' => [
                                            'type' => 'select',
                                            'label' => 'THEME_TYPHOON.ADMIN.HEADER_BAR_BACKGROUND',
                                            'help' => 'THEME_TYPHOON.ADMIN.HEADER_BAR_BACKGROUND_HELP',
                                            'options' => [
                                                'auto' => 'THEME_TYPHOON.ADMIN.HEADER_BAR_BACKGROUND_AUTO',
                                                'light' => 'THEME_TYPHOON.ADMIN.HEADER_BAR_BACKGROUND_LIGHT',
                                                'dark' => 'THEME_TYPHOON.ADMIN.HEADER_BAR_BACKGROUND_DARK',
                                                'transparent' => 'THEME_TYPHOON.ADMIN.HEADER_BAR_BACKGROUND_TRANSPARENT',
                                                'custom' => 'THEME_TYPHOON.ADMIN.HEADER_BAR_BACKGROUND_CUSTOM'
                                            ]
                                        ],
                                        'header_bar.custom_style' => [
                                            'type' => 'text',
                                            'label' => 'THEME_TYPHOON.ADMIN.HEADER_BAR_CUSTOM_BACKGROUND_STYLE',
                                            'help' => 'THEME_TYPHOON.ADMIN.HEADER_BAR_CUSTOM_BACKGROUND_STYLE_HELP',
                                            'default' => 'linear-gradient(90deg, rgba(0,0,0,0.8) 0%, rgba(0,0,0,0.4) 100%)'
                                        ],
                                        'header_bar.text' => [
                                            'type' => 'select',
                                            'label' => 'THEME_TYPHOON.ADMIN.HEADER_BAR_TEXT',
                                            'help' => 'THEME_TYPHOON.ADMIN.HEADER_BAR_TEXT_HELP',
                                            'options' => [
                                                'auto' => 'THEME_TYPHOON.ADMIN.HEADER_BAR_TEXT_AUTO',
                                                'light' => 'THEME_TYPHOON.ADMIN.HEADER_BAR_TEXT_LIGHT',
                                                'dark' => 'THEME_TYPHOON.ADMIN.HEADER_BAR_TEXT_DARK'
                                            ]
                                        ]
                                    ]
                                ],
                                'section_hero' => [
                                    'type' => 'section',
                                    'title' => 'THEME_TYPHOON.ADMIN.HERO_DEFAULTS',
                                    'underline' => true,
                                    'fields' => [
                                        'hero.display' => [
                                            'type' => 'toggle',
                                            'label' => 'THEME_TYPHOON.ADMIN.HERO_DISPLAY',
                                            'help' => 'THEME_TYPHOON.ADMIN.HERO_DISPLAY_HELP',
                                            'highlight' => 1,
                                            'default' => 1,
                                            'options' => [
                                                1 => 'PLUGIN_ADMIN.YES',
                                                0 => 'PLUGIN_ADMIN.NO'
                                            ],
                                            'validate' => [
                                                'type' => 'bool'
                                            ]
                                        ],
                                        'hero.alignment' => [
                                            'type' => 'toggle',
                                            'label' => 'THEME_TYPHOON.ADMIN.HERO_ALIGNMENT',
                                            'highlight' => 'left',
                                            'options' => [
                                                'left' => 'THEME_TYPHOON.ADMIN.HERO_ALIGNMENT_LEFT',
                                                'center' => 'THEME_TYPHOON.ADMIN.HERO_ALIGNMENT_CENTER',
                                                'right' => 'THEME_TYPHOON.ADMIN.HERO_ALIGNMENT_RIGHT'
                                            ]
                                        ],
                                        'hero.image' => [
                                            'type' => 'text',
                                            'label' => 'THEME_TYPHOON.ADMIN.HERO_IMAGE',
                                            'help' => 'THEME_TYPHOON.ADMIN.HERO_IMAGE_HELP'
                                        ],
                                        'hero.padding' => [
                                            'type' => 'text',
                                            'label' => 'THEME_TYPHOON.ADMIN.HERO_PADDING_CLASSES'
                                        ],
                                        'section_overlay' => [
                                            'type' => 'section',
                                            'title' => 'THEME_TYPHOON.ADMIN.HERO_OVERLAY_TITLE',
                                            'underline' => true
                                        ],
                                        'hero.overlay' => [
                                            'type' => 'select',
                                            'label' => 'THEME_TYPHOON.ADMIN.HERO_OVERLAY',
                                            'help' => 'THEME_TYPHOON.ADMIN.HERO_OVERLAY_HELP',
                                            'options' => [
                                                'dark' => 'THEME_TYPHOON.ADMIN.HERO_OVERLAY_DARK',
                                                'darker' => 'THEME_TYPHOON.ADMIN.HERO_OVERLAY_DARKER',
                                                'light' => 'THEME_TYPHOON.ADMIN.HERO_OVERLAY_LIGHT',
                                                'lighter' => 'THEME_TYPHOON.ADMIN.HERO_OVERLAY_LIGHTER',
                                                'primary' => 'THEME_TYPHOON.ADMIN.HERO_OVERLAY_PRIMARY',
                                                'none' => 'THEME_TYPHOON.ADMIN.HERO_OVERLAY_NONE',
                                                'custom' => 'THEME_TYPHOON.ADMIN.HERO_OVERLAY_CUSTOM'
                                            ]
                                        ],
                                        'hero.custom' => [
                                            'type' => 'colorpicker',
                                            'label' => 'THEME_TYPHOON.ADMIN.HERO_CUSTOM_OVERLAY_COLOR',
                                            'help' => 'THEME_TYPHOON.ADMIN.HERO_CUSTOM_OVERLAY_COLOR_HELP',
                                            'default' => '#3C4043'
                                        ],
                                        'hero.overlay_gradient' => [
                                            'type' => 'selectize',
                                            'label' => 'THEME_TYPHOON.ADMIN.HERO_OVERLAY_GRADIENT_OPACITY',
                                            'help' => 'THEME_TYPHOON.ADMIN.HERO_OVERLAY_GRADIENT_OPACITY_HELP',
                                            'default' => [
                                                0 => 0.8,
                                                1 => 0.3
                                            ],
                                            'classes' => 'fancy',
                                            'validate' => [
                                                'type' => 'commalist'
                                            ]
                                        ],
                                        'hero.overlay_direction' => [
                                            'type' => 'select',
                                            'label' => 'THEME_TYPHOON.ADMIN.HERO_OVERLAY_GRADIENT_DIRECTION',
                                            'default' => 'right',
                                            'options' => [
                                                'right' => 'THEME_TYPHOON.ADMIN.HERO_OVERLAY_GRADIENT_DIRECTION_RIGHT',
                                                'bottom' => 'THEME_TYPHOON.ADMIN.HERO_OVERLAY_GRADIENT_DIRECTION_BOTTOM',
                                                'top' => 'THEME_TYPHOON.ADMIN.HERO_OVERLAY_GRADIENT_DIRECTION_TOP',
                                                'left' => 'THEME_TYPHOON.ADMIN.HERO_OVERLAY_GRADIENT_DIRECTION_LEFT'
                                            ]
                                        ]
                                    ]
                                ]
                            ]
                        ],
                        'typhoon_content_tab' => [
                            'type' => 'tab',
                            'title' => 'THEME_TYPHOON.ADMIN.FOOTER',
                            'fields' => [
                                'footer_page_route' => [
                                    'type' => 'text',
                                    'label' => 'THEME_TYPHOON.ADMIN.FOOTER_PAGE_ROUTE',
                                    'help' => 'THEME_TYPHOON.ADMIN.FOOTER_PAGE_ROUTE_HELP',
                                    'placeholder' => '/modules/_footer'
                                ],
                                'footer_page_exists' => [
                                    'type' => 'page-exists',
                                    'page_field' => 'footer_page_route',
                                    'page_template' => 'modular/footer',
                                    'success_msg' => 'THEME_TYPHOON.ADMIN.FOOTER_PAGE_EXISTS_SUCCESS',
                                    'error_msg' => 'THEME_TYPHOON.ADMIN.FOOTER_PAGE_EXISTS_ERROR',
                                    'fields' => [
                                        'footer.menu_enabled' => [
                                            'type' => 'toggle',
                                            'label' => 'THEME_TYPHOON.ADMIN.FOOTER_ENABLE_MENU_LINKS',
                                            'help' => 'THEME_TYPHOON.ADMIN.FOOTER_ENABLE_MENU_LINKS_HELP',
                                            'highlight' => 1,
                                            'default' => 1,
                                            'options' => [
                                                1 => 'PLUGIN_ADMIN.YES',
                                                0 => 'PLUGIN_ADMIN.NO'
                                            ],
                                            'validate' => [
                                                'type' => 'bool'
                                            ]
                                        ],
                                        'footer.menu' => [
                                            'type' => 'list',
                                            'label' => 'THEME_TYPHOON.ADMIN.FOOTER_MENU_LINKS',
                                            'fields' => [
                                                '.label' => [
                                                    'type' => 'text',
                                                    'label' => 'THEME_TYPHOON.ADMIN.FOOTER_MENU_ITEM',
                                                    'placeholder' => 'THEME_TYPHOON.ADMIN.FOOTER_MENU_PLACEHOLDER'
                                                ],
                                                '.link' => [
                                                    'type' => 'text',
                                                    'label' => 'THEME_TYPHOON.ADMIN.FOOTER_MENU_LINK',
                                                    'placeholder' => '/some/page or https://acme.com/path'
                                                ]
                                            ]
                                        ],
                                        'footer.social_enabled' => [
                                            'type' => 'toggle',
                                            'label' => 'THEME_TYPHOON.ADMIN.FOOTER_ENABLE_SOCIAL_LINKS',
                                            'help' => 'THEME_TYPHOON.ADMIN.FOOTER_ENABLE_SOCIAL_LINKS_HELP',
                                            'highlight' => 1,
                                            'default' => 1,
                                            'options' => [
                                                1 => 'PLUGIN_ADMIN.YES',
                                                0 => 'PLUGIN_ADMIN.NO'
                                            ],
                                            'validate' => [
                                                'type' => 'bool'
                                            ]
                                        ],
                                        'footer.social' => [
                                            'type' => 'list',
                                            'label' => 'THEME_TYPHOON.ADMIN.FOOTER_SOCIAL_LINKS',
                                            'fields' => [
                                                '.network' => [
                                                    'type' => 'select',
                                                    'label' => 'THEME_TYPHOON.ADMIN.FOOTER_SOCIAL_NETWORK',
                                                    'options' => [
                                                        'github' => 'Github',
                                                        'twitter' => 'Twitter',
                                                        'facebook' => 'Facebook',
                                                        'instagram' => 'Instagram',
                                                        'linkedin' => 'LinkedIn',
                                                        'pinterest' => 'Pinterest',
                                                        'youtube__brands' => 'YouTube',
                                                        'vimeo__brands' => 'Vimeo',
                                                        '500px__brands' => '500px',
                                                        'gitbook__brands' => 'Gitbook'
                                                    ]
                                                ],
                                                '.link' => [
                                                    'type' => 'text',
                                                    'label' => 'THEME_TYPHOON.ADMIN.FOOTER_SOCIAL_LINK',
                                                    'placeholder' => 'https://socialnetwork.com/username'
                                                ]
                                            ]
                                        ],
                                        'footer.copyright' => [
                                            'type' => 'editor',
                                            'rows' => 5,
                                            'label' => 'THEME_TYPHOON.ADMIN.FOOTER_COPYRIGHT'
                                        ]
                                    ]
                                ]
                            ]
                        ],
                        'typhoon_notices_tab' => [
                            'type' => 'tab',
                            'title' => 'THEME_TYPHOON.ADMIN.NOTICES',
                            'fields' => [
                                'notices_page_route' => [
                                    'type' => 'text',
                                    'label' => 'THEME_TYPHOON.ADMIN.NOTICES_PAGE_ROUTE',
                                    'help' => 'THEME_TYPHOON.ADMIN.NOTICES_PAGE_ROUTE_HELP',
                                    'placeholder' => '/modules/_notices'
                                ],
                                'notices_page_exists' => [
                                    'type' => 'page-exists',
                                    'page_field' => 'notices_page_route',
                                    'page_template' => 'modular/notices',
                                    'success_msg' => 'THEME_TYPHOON.ADMIN.NOTICES_PAGE_EXISTS_SUCCESS',
                                    'error_msg' => 'THEME_TYPHOON.ADMIN.NOTICES_PAGE_EXISTS_ERROR',
                                    'fields' => [
                                        'notices' => [
                                            'type' => 'list',
                                            'label' => NULL,
                                            'style' => 'vertical',
                                            'collapsed' => true,
                                            'field_classes' => 'notices-list',
                                            'min_height' => '85px',
                                            'fields' => [
                                                '.content' => [
                                                    'type' => 'textarea',
                                                    'label' => 'THEME_TYPHOON.ADMIN.NOTICE_CONTENT'
                                                ],
                                                '.enabled' => [
                                                    'type' => 'toggle',
                                                    'label' => 'THEME_TYPHOON.ADMIN.NOTICE_ENABLED',
                                                    'highlight' => 1,
                                                    'default' => 1,
                                                    'options' => [
                                                        1 => 'PLUGIN_ADMIN.YES',
                                                        0 => 'PLUGIN_ADMIN.NO'
                                                    ],
                                                    'validate' => [
                                                        'type' => 'bool'
                                                    ]
                                                ],
                                                '.only_homepage' => [
                                                    'type' => 'toggle',
                                                    'label' => 'THEME_TYPHOON.ADMIN.NOTICE_ONLY_HOMEPAGE',
                                                    'highlight' => 1,
                                                    'default' => 1,
                                                    'options' => [
                                                        1 => 'PLUGIN_ADMIN.YES',
                                                        0 => 'PLUGIN_ADMIN.NO'
                                                    ],
                                                    'validate' => [
                                                        'type' => 'bool'
                                                    ]
                                                ],
                                                '.type' => [
                                                    'type' => 'select',
                                                    'label' => 'THEME_TYPHOON.ADMIN.NOTICE_TYPE',
                                                    'default' => 'alert',
                                                    'options' => [
                                                        'alert' => 'THEME_TYPHOON.ADMIN.NOTICE_ALERT',
                                                        'critical' => 'THEME_TYPHOON.ADMIN.NOTICE_CRITICAL',
                                                        'note' => 'THEME_TYPHOON.ADMIN.NOTICE_NOTE',
                                                        'success' => 'THEME_TYPHOON.ADMIN.NOTICE_SUCCESS'
                                                    ]
                                                ],
                                                '.learn_more_link' => [
                                                    'type' => 'text',
                                                    'label' => 'THEME_TYPHOON.ADMIN.NOTICE_LEARNMORE'
                                                ]
                                            ]
                                        ]
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
