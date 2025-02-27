<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/wamp64/www/moDev/user/plugins/lightbox-gallery/blueprints.yaml',
    'modified' => 1625095598,
    'data' => [
        'name' => 'Lightbox Gallery',
        'slug' => 'lightbox-gallery',
        'type' => 'plugin',
        'version' => '1.0.5',
        'premium' => true,
        'description' => 'A lightweight but flexible lightbox implementation for Grav that supports galleries',
        'icon' => 'window-restore',
        'author' => [
            'name' => 'Trilby Media, LLC',
            'email' => 'hello@trilby.media'
        ],
        'homepage' => 'https://getgrav.org/premium/lightbox-gallery',
        'keywords' => 'grav, plugin, lightbox, gallery',
        'bugs' => 'https://github.com/getgrav/grav-premium-issues/labels/lightbox-gallery',
        'docs' => 'https://getgrav.org/premium/lightbox-gallery/docs',
        'license' => 'https://getgrav.org/premium/license',
        'dependencies' => [
            0 => [
                'name' => 'grav',
                'version' => '>=1.6.30'
            ],
            1 => [
                'name' => 'shortcode-core',
                'version' => '>=4.0.0'
            ]
        ],
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'PLUGIN_ADMIN.PLUGIN_STATUS',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'active' => [
                    'type' => 'toggle',
                    'label' => 'Always Active',
                    'help' => 'If false you will need to enable with \'lightbox: active: true\' in page frontmatter',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'autoIncludeAssets' => [
                    'type' => 'toggle',
                    'label' => 'Always Include Assets',
                    'help' => 'If false you will need to include the CSS and JS manually in your Twig templates when required',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'appearance_section' => [
                    'type' => 'section',
                    'title' => 'Appearance & Effects',
                    'underline' => true,
                    'fields' => [
                        'options.selector' => [
                            'type' => 'textbox',
                            'size' => 'medium',
                            'label' => 'Selector',
                            'help' => 'Name of the selector for example [rel="lightbox"] or .glightbox\''
                        ],
                        'options.skin' => [
                            'type' => 'textbox',
                            'size' => 'medium',
                            'label' => 'Skin',
                            'help' => 'Name of the skin, it will add a class to the lightbox so you can style it with css.'
                        ],
                        'options.openEffect' => [
                            'type' => 'select',
                            'size' => 'medium',
                            'label' => 'Open Effect',
                            'help' => 'Name of the effect on lightbox open. (zoom, fade, none)',
                            'options' => [
                                'zoom' => 'Zoom',
                                'fade' => 'Fade',
                                'none' => 'None'
                            ]
                        ],
                        'options.closeEffect' => [
                            'type' => 'select',
                            'size' => 'medium',
                            'label' => 'Close Effect',
                            'help' => 'Name of the effect on lightbox open. (zoom, fade, none)',
                            'options' => [
                                'zoom' => 'Zoom',
                                'fade' => 'Fade',
                                'none' => 'None'
                            ]
                        ],
                        'options.slideEffect' => [
                            'type' => 'select',
                            'size' => 'medium',
                            'label' => 'Slide Effect',
                            'help' => 'Name of the effect on slide change. (slide, fade, zoom, none)',
                            'options' => [
                                'slide' => 'Slide',
                                'zoom' => 'Zoom',
                                'fade' => 'Fade',
                                'none' => 'None'
                            ]
                        ],
                        'options.moreText' => [
                            'type' => 'textbox',
                            'label' => 'More Text',
                            'size' => 'medium',
                            'help' => 'More text for descriptions on mobile devices.'
                        ],
                        'options.moreLength' => [
                            'type' => 'number',
                            'label' => 'More Length',
                            'size' => 'x-small',
                            'help' => 'Number of characters to display on the description before adding the moreText link (only for mobiles), if 0 it will display the entire description.'
                        ],
                        'actions_section' => [
                            'type' => 'section',
                            'title' => 'Actions',
                            'underline' => true
                        ],
                        'options.closeButton' => [
                            'type' => 'toggle',
                            'label' => 'Close Button',
                            'help' => 'Show or hide the close button.',
                            'highlight' => 1,
                            'default' => 1,
                            'options' => [
                                1 => 'PLUGIN_ADMIN.ENABLED',
                                0 => 'PLUGIN_ADMIN.DISABLED'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'options.touchNavigation' => [
                            'type' => 'toggle',
                            'label' => 'Touch Navigation',
                            'help' => 'Enable or disable the touch navigation (swipe).',
                            'highlight' => 1,
                            'default' => 1,
                            'options' => [
                                1 => 'PLUGIN_ADMIN.ENABLED',
                                0 => 'PLUGIN_ADMIN.DISABLED'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'options.touchFollowAxis' => [
                            'type' => 'toggle',
                            'label' => 'Touch Follow Axis',
                            'help' => 'Image follow axis when dragging on mobile.',
                            'highlight' => 1,
                            'default' => 1,
                            'options' => [
                                1 => 'PLUGIN_ADMIN.ENABLED',
                                0 => 'PLUGIN_ADMIN.DISABLED'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'options.keyboardNavigation' => [
                            'type' => 'toggle',
                            'label' => 'Keyboard Navigation',
                            'help' => 'Enable or disable the keyboard navigation.',
                            'highlight' => 1,
                            'default' => 1,
                            'options' => [
                                1 => 'PLUGIN_ADMIN.ENABLED',
                                0 => 'PLUGIN_ADMIN.DISABLED'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'options.closeOnOutsideClick' => [
                            'type' => 'toggle',
                            'label' => 'Close with Outside Click',
                            'help' => 'Close the lightbox when clicking outside the active slide.',
                            'highlight' => 1,
                            'default' => 1,
                            'options' => [
                                1 => 'PLUGIN_ADMIN.ENABLED',
                                0 => 'PLUGIN_ADMIN.DISABLED'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'options.startAt' => [
                            'type' => 'number',
                            'width' => 'small',
                            'label' => 'Start At',
                            'size' => 'x-small',
                            'help' => 'Start lightbox at defined index.'
                        ],
                        'styling_section' => [
                            'type' => 'section',
                            'title' => 'Styling',
                            'underline' => true
                        ],
                        'options.width' => [
                            'type' => 'text',
                            'size' => 'medium',
                            'label' => 'Width',
                            'help' => 'Default width for inline elements and iframes, you can define a specific size on each slide. You can use any unit for example 90% or 100vw for full width'
                        ],
                        'options.height' => [
                            'type' => 'text',
                            'size' => 'medium',
                            'label' => 'Height',
                            'help' => 'Default height for inline elements and iframes, you can define a specific size on each slide.You can use any unit for example 90% or 100vw For inline elements you can set the height to auto.'
                        ],
                        'options.videosWidth' => [
                            'type' => 'text',
                            'size' => 'medium',
                            'label' => 'Videos Width',
                            'help' => 'Default width for videos. Videos are responsive so height is not required. The width can be in px % or even vw for example, 500px, 90% or 100vw for full width videos'
                        ],
                        'options.descPosition' => [
                            'type' => 'select',
                            'size' => 'medium',
                            'label' => 'Description Position',
                            'help' => 'Global position for slides description, you can define a specific position on each slide (bottom, top, left, right).',
                            'options' => [
                                'bottom' => 'Bottom',
                                'top' => 'Top',
                                'left' => 'Left',
                                'right' => 'Right'
                            ]
                        ],
                        'behaviors_section' => [
                            'type' => 'section',
                            'title' => 'Behaviors',
                            'underline' => true
                        ],
                        'options.loop' => [
                            'type' => 'toggle',
                            'label' => 'Loop',
                            'help' => 'Loop slides on end.',
                            'highlight' => 0,
                            'default' => 0,
                            'options' => [
                                1 => 'PLUGIN_ADMIN.ENABLED',
                                0 => 'PLUGIN_ADMIN.DISABLED'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'options.zoomable' => [
                            'type' => 'toggle',
                            'label' => 'Zoomable',
                            'help' => 'Enable or disable zoomable images you can also use data-zoomable="false" on individual nodes.',
                            'highlight' => 1,
                            'default' => 1,
                            'options' => [
                                1 => 'PLUGIN_ADMIN.ENABLED',
                                0 => 'PLUGIN_ADMIN.DISABLED'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'options.draggable' => [
                            'type' => 'toggle',
                            'label' => 'Draggable',
                            'help' => 'Enable or disable mouse drag to go prev and next slide (only images and inline content), you can also use data-draggable="false" on individual nodes.',
                            'highlight' => 1,
                            'default' => 1,
                            'options' => [
                                1 => 'PLUGIN_ADMIN.ENABLED',
                                0 => 'PLUGIN_ADMIN.DISABLED'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'options.dragToleranceX' => [
                            'type' => 'number',
                            'label' => 'Drag Tollerance X',
                            'size' => 'x-small',
                            'help' => 'Used with draggable. Number of pixels the user has to drag to go to prev or next slide.'
                        ],
                        'options.dragToleranceY' => [
                            'type' => 'number',
                            'label' => 'Drag Tollerance Y',
                            'size' => 'x-small',
                            'help' => 'Used with draggable. Number of pixels the user has to drag up or down to close the lightbox (Set 0 to disable vertical drag).'
                        ],
                        'options.dragAutoSnap' => [
                            'type' => 'toggle',
                            'label' => 'Drag Auto-Snap',
                            'help' => 'If true the slide will automatically change to prev/next or close if dragToleranceX or dragToleranceY is reached, otherwise it will wait till the mouse is released.',
                            'highlight' => 0,
                            'default' => 0,
                            'options' => [
                                1 => 'PLUGIN_ADMIN.ENABLED',
                                0 => 'PLUGIN_ADMIN.DISABLED'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'options.preload' => [
                            'type' => 'toggle',
                            'label' => 'Preload',
                            'help' => 'Enable or disable preloading',
                            'highlight' => 1,
                            'default' => 1,
                            'options' => [
                                1 => 'PLUGIN_ADMIN.ENABLED',
                                0 => 'PLUGIN_ADMIN.DISABLED'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'options.autoplayVideos' => [
                            'type' => 'toggle',
                            'label' => 'Autoplay Videos',
                            'help' => 'Autoplay videos on open.',
                            'highlight' => 1,
                            'default' => 1,
                            'options' => [
                                1 => 'PLUGIN_ADMIN.ENABLED',
                                0 => 'PLUGIN_ADMIN.DISABLED'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'options.autofocusVideos' => [
                            'type' => 'toggle',
                            'label' => 'Autofocus Videos',
                            'help' => 'If enabled video will be focused on play to allow keyboard sortcuts for the player, this will deactivate prev and next arrows to change slide so use it only if you know what you are doing.',
                            'highlight' => 0,
                            'default' => 0,
                            'options' => [
                                1 => 'PLUGIN_ADMIN.ENABLED',
                                0 => 'PLUGIN_ADMIN.DISABLED'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
