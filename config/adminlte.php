<?php

return [
    
    /*
    |--------------------------------------------------------------------------
    | Title
    |--------------------------------------------------------------------------
    |
    | The default title of your admin panel, this goes into the title tag
    | of your page. You can override it per page with the title section.
    | You can optionally also specify a title prefix and/or postfix.
    |
    */
    
    'title' => 'LegalTech Indonesia',
    
    'title_prefix' => '',
    
    'title_postfix' => '',
    
    /*
    |--------------------------------------------------------------------------
    | Logo
    |--------------------------------------------------------------------------
    |
    | This logo is displayed at the upper left corner of your admin panel.
    | You can use basic HTML here if you want. The logo has also a mini
    | variant, used for the mini side bar. Make it 3 letters or so
    |
    */
    
    'logo' => '<b>Legal</b>Tech',
    
    'logo_mini' => '<b>L</b>T',
    
    /*
    |--------------------------------------------------------------------------
    | Skin Color
    |--------------------------------------------------------------------------
    |
    | Choose a skin color for your admin panel. The available skin colors:
        | blue, black, purple, yellow, red, and green. Each skin also has a
        | ligth variant: blue-light, purple-light, purple-light, etc.
        |
        */
        
        'skin' => 'red-light',
        
        /*
        |--------------------------------------------------------------------------
        | Layout
        |--------------------------------------------------------------------------
        |
        | Choose a layout for your admin panel. The available layout options:
            | null, 'boxed', 'fixed', 'top-nav'. null is the default, top-nav
            | removes the sidebar and places your menu in the top navbar
            |
            */
            
            'layout' => 'boxed',
            
            /*
            |--------------------------------------------------------------------------
            | Collapse Sidebar
            |--------------------------------------------------------------------------
            |
            | Here we choose and option to be able to start with a collapsed side
            | bar. To adjust your sidebar layout simply set this  either true
            | this is compatible with layouts except top-nav layout option
            |
            */
            
            'collapse_sidebar' => false,
            
            /*
            |--------------------------------------------------------------------------
            | URLs
            |--------------------------------------------------------------------------
            |
            | Register here your dashboard, logout, login and register URLs. The
            | logout URL automatically sends a POST request in Laravel 5.3 or higher.
            | You can set the request to a GET or POST with logout_method.
            | Set register_url to null if you don't want a register link.
            |
            */
            
            'dashboard_url' => 'home',
            
            'logout_url' => 'logout',
            
            'logout_method' => null,
            
            'login_url' => 'login',
            
            'register_url' => 'register',
            
            /*
            |--------------------------------------------------------------------------
            | Menu Items
            |--------------------------------------------------------------------------
            |
            | Specify your menu items to display in the left sidebar. Each menu item
            | should have a text and and a URL. You can also specify an icon from
            | Font Awesome. A string instead of an array represents a header in sidebar
            | layout. The 'can' is a filter on Laravel's built in Gate functionality.
            |
            */
            
            'menu' => [
                'MAIN NAVIGATION',
                [
                    'text' => 'Blog',
                    'url'  => 'admin/blog',
                    'can'  => 'manage-blog',
                ],
                [
                    'text'        => 'LegalTech',
                    'url'         => 'welcome',
                    'icon'        => 'home',
                ],
                'e-KEJAKSAAN',
                [
                    'text'        => 'DASHBOARD',
                    'url'         => 'home',
                    'icon'        => 'dashboard',
                ],
                [
                    'text'    => 'Pembinaan',
                    'icon'    => 'graduation-cap',
                    'submenu' => [
                        [
                            'text'    => 'Apps 1',
                            'url'     => '#',
                            'submenu' => [
                                [
                                    'text' => 'Dashboard',
                                    'url'  => 'bin/apps1/home',
                                    'icon' => 'dashboard',
                                ],
                                [
                                    'text' => 'Page 1',
                                    'url'  => '#',
                                ],
                                [
                                    'text'    => 'Progress 1',
                                    'url'     => '#',
                                    'submenu' => [
                                        [
                                            'text' => 'List',
                                            'url'  => '#',
                                        ],
                                        [
                                            'text' => 'Edit',
                                            'url'  => '#',
                                        ],
                                        [
                                            'text' => 'Process',
                                            'url'  => '#',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                        [
                            'text'    => 'Apps 2',
                            'url'     => '#',
                            'submenu' => [
                                [
                                    'text' => 'Dashboard',
                                    'url'  => '#',
                                ],
                                [
                                    'text' => 'Page 1',
                                    'url'  => '#',
                                ],
                                [
                                    'text'    => 'Progress 1',
                                    'url'     => '#',
                                    'submenu' => [
                                        [
                                            'text' => 'List',
                                            'url'  => '#',
                                        ],
                                        [
                                            'text' => 'Edit',
                                            'url'  => '#',
                                        ],
                                        [
                                            'text' => 'Process',
                                            'url'  => '#',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                [
                    'text'    => 'Intelijen',
                    'icon'    => 'user-secret',
                    'submenu' => [
                        [
                            'text'    => 'Apps 1',
                            'url'     => '#',
                            'submenu' => [
                                [
                                    'text' => 'Dashboard',
                                    'url'  => '#',
                                ],
                                [
                                    'text' => 'Page 1',
                                    'url'  => '#',
                                ],
                                [
                                    'text'    => 'Progress 1',
                                    'url'     => '#',
                                    'submenu' => [
                                        [
                                            'text' => 'List',
                                            'url'  => '#',
                                        ],
                                        [
                                            'text' => 'Edit',
                                            'url'  => '#',
                                        ],
                                        [
                                            'text' => 'Process',
                                            'url'  => '#',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                        [
                            'text'    => 'Apps 2',
                            'url'     => '#',
                            'submenu' => [
                                [
                                    'text' => 'Dashboard',
                                    'url'  => '#',
                                ],
                                [
                                    'text' => 'Page 1',
                                    'url'  => '#',
                                ],
                                [
                                    'text'    => 'Progress 1',
                                    'url'     => '#',
                                    'submenu' => [
                                        [
                                            'text' => 'List',
                                            'url'  => '#',
                                        ],
                                        [
                                            'text' => 'Edit',
                                            'url'  => '#',
                                        ],
                                        [
                                            'text' => 'Process',
                                            'url'  => '#',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                [
                    'text'    => 'Pidana Umum',
                    'icon'    => 'gavel',
                    'submenu' => [
                        [
                            'text'    => 'Apps 1',
                            'url'     => '#',
                            'submenu' => [
                                [
                                    'text' => 'Dashboard',
                                    'url'  => '#',
                                ],
                                [
                                    'text' => 'Page 1',
                                    'url'  => '#',
                                ],
                                [
                                    'text'    => 'Progress 1',
                                    'url'     => '#',
                                    'submenu' => [
                                        [
                                            'text' => 'List',
                                            'url'  => '#',
                                        ],
                                        [
                                            'text' => 'Edit',
                                            'url'  => '#',
                                        ],
                                        [
                                            'text' => 'Process',
                                            'url'  => '#',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                        [
                            'text'    => 'Apps 2',
                            'url'     => '#',
                            'submenu' => [
                                [
                                    'text' => 'Dashboard',
                                    'url'  => '#',
                                ],
                                [
                                    'text' => 'Page 1',
                                    'url'  => '#',
                                ],
                                [
                                    'text'    => 'Progress 1',
                                    'url'     => '#',
                                    'submenu' => [
                                        [
                                            'text' => 'List',
                                            'url'  => '#',
                                        ],
                                        [
                                            'text' => 'Edit',
                                            'url'  => '#',
                                        ],
                                        [
                                            'text' => 'Process',
                                            'url'  => '#',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                [
                    'text'    => 'Pidana Khusus',
                    'icon'    => 'money',
                    'submenu' => [
                        [
                            'text'    => 'Apps 1',
                            'url'     => '#',
                            'submenu' => [
                                [
                                    'text' => 'Dashboard',
                                    'url'  => '#',
                                ],
                                [
                                    'text' => 'Page 1',
                                    'url'  => '#',
                                ],
                                [
                                    'text'    => 'Progress 1',
                                    'url'     => '#',
                                    'submenu' => [
                                        [
                                            'text' => 'List',
                                            'url'  => '#',
                                        ],
                                        [
                                            'text' => 'Edit',
                                            'url'  => '#',
                                        ],
                                        [
                                            'text' => 'Process',
                                            'url'  => '#',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                        [
                            'text'    => 'Apps 2',
                            'url'     => '#',
                            'submenu' => [
                                [
                                    'text' => 'Dashboard',
                                    'url'  => '#',
                                ],
                                [
                                    'text' => 'Page 1',
                                    'url'  => '#',
                                ],
                                [
                                    'text'    => 'Progress 1',
                                    'url'     => '#',
                                    'submenu' => [
                                        [
                                            'text' => 'List',
                                            'url'  => '#',
                                        ],
                                        [
                                            'text' => 'Edit',
                                            'url'  => '#',
                                        ],
                                        [
                                            'text' => 'Process',
                                            'url'  => '#',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                [
                    'text'    => 'Perdata & TUN',
                    'icon'    => 'university',
                    'submenu' => [
                        [
                            'text'    => 'Apps 1',
                            'url'     => '#',
                            'submenu' => [
                                [
                                    'text' => 'Dashboard',
                                    'url'  => '#',
                                ],
                                [
                                    'text' => 'Page 1',
                                    'url'  => '#',
                                ],
                                [
                                    'text'    => 'Progress 1',
                                    'url'     => '#',
                                    'submenu' => [
                                        [
                                            'text' => 'List',
                                            'url'  => '#',
                                        ],
                                        [
                                            'text' => 'Edit',
                                            'url'  => '#',
                                        ],
                                        [
                                            'text' => 'Process',
                                            'url'  => '#',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                        [
                            'text'    => 'Apps 2',
                            'url'     => '#',
                            'submenu' => [
                                [
                                    'text' => 'Dashboard',
                                    'url'  => '#',
                                ],
                                [
                                    'text' => 'Page 1',
                                    'url'  => '#',
                                ],
                                [
                                    'text'    => 'Progress 1',
                                    'url'     => '#',
                                    'submenu' => [
                                        [
                                            'text' => 'List',
                                            'url'  => '#',
                                        ],
                                        [
                                            'text' => 'Edit',
                                            'url'  => '#',
                                        ],
                                        [
                                            'text' => 'Process',
                                            'url'  => '#',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                [
                    'text'    => 'Pengawasan',
                    'icon'    => 'binoculars',
                    'label'       => 'new',
                    'label_color' => 'info',
                    'submenu' => [
                        [
                            'text'    => 'eLAPDU',
                            'icon'    => 'bullhorn',
                            'url'     => '#',
                            'submenu' => [
                                [
                                    'text' => 'Dashboard',
                                    'url'  => 'was/elapdu/home',
                                    'icon' => 'dashboard',
                                ],
                                [
                                    'text' => 'Pelapor',
                                    'url'  => 'was/elapdu/home',
                                    'icon' => 'user',
                                ],
                                [
                                    'text' => 'Pemeriksaan',
                                    'url'  => '#',
                                    'icon' => 'balance-scale',
                                    'submenu' => [
                                        [
                                            'text' => 'Pengaduan Baru',
                                            'url'  => '#',
                                            'icon' => 'commenting',
                                        ],
                                        [
                                            'text' => 'Klarifikasi',
                                            'url'  => '#',
                                            'icon' => 'comments-o',
                                        ],
                                        [
                                            'text' => 'Inspeksi Kasus',
                                            'url'  => '#',
                                            'icon' => 'search-plus',
                                        ],
                                        [
                                            'text' => 'Usulan Hukum',
                                            'url'  => '#',
                                            'icon' => 'balance-scale',
                                        ],
                                        [
                                            'text' => 'Putusan Hukuman',
                                            'url'  => '#',
                                            'icon' => 'gavel',
                                        ],
                                    ],
                                ],
                                [
                                    'text'    => 'Terlapor',
                                    'url'     => '#',
                                    'icon' => 'user',
                                    'submenu' => [
                                        [
                                            'text' => 'Pengaduan Baru',
                                            'url'  => '#',
                                        ],
                                        [
                                            'text' => 'Klarifikasi',
                                            'url'  => '#',
                                        ],
                                        [
                                            'text' => 'Inspeksi Kasus',
                                            'url'  => '#',
                                        ],
                                        [
                                            'text' => 'Usulan Hukum',
                                            'url'  => '#',
                                        ],
                                        [
                                            'text' => 'Putusan Hukuman',
                                            'url'  => '#',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                        [
                            'text'    => 'Apps 2',
                            'url'     => '#',
                            'submenu' => [
                                [
                                    'text' => 'Dashboard',
                                    'url'  => '#',
                                ],
                                [
                                    'text' => 'Page 1',
                                    'url'  => '#',
                                ],
                                [
                                    'text'    => 'Progress 1',
                                    'url'     => '#',
                                    'submenu' => [
                                        [
                                            'text' => 'List',
                                            'url'  => '#',
                                        ],
                                        [
                                            'text' => 'Edit',
                                            'url'  => '#',
                                        ],
                                        [
                                            'text' => 'Process',
                                            'url'  => '#',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                'ACCOUNT SETTINGS',
                [
                    'text' => 'Profile',
                    'url'  => 'admin/settings',
                    'icon' => 'user',
                ],
                [
                    'text' => 'Change Password',
                    'url'  => 'admin/settings',
                    'icon' => 'lock',
                ],
                'ADMINISTRATOR',
                [
                    'text' => 'Profile',
                    'url'  => 'admin/settings',
                    'icon' => 'user',
                ],
                [
                    'text' => 'Change Password',
                    'url'  => 'admin/settings',
                    'icon' => 'lock',
                ],
                'LABELS',
                [
                    'text'       => 'Important',
                    'icon_color' => 'red',
                ],
                [
                    'text'       => 'Warning',
                    'icon_color' => 'yellow',
                ],
                [
                    'text'       => 'Information',
                    'icon_color' => 'aqua',
                ],
            ],
            
            /*
            |--------------------------------------------------------------------------
            | Menu Filters
            |--------------------------------------------------------------------------
            |
            | Choose what filters you want to include for rendering the menu.
            | You can add your own filters to this array after you've created them.
            | You can comment out the GateFilter if you don't want to use Laravel's
            | built in Gate functionality
            |
            */
            
            'filters' => [
                JeroenNoten\LaravelAdminLte\Menu\Filters\HrefFilter::class,
                JeroenNoten\LaravelAdminLte\Menu\Filters\ActiveFilter::class,
                JeroenNoten\LaravelAdminLte\Menu\Filters\SubmenuFilter::class,
                JeroenNoten\LaravelAdminLte\Menu\Filters\ClassesFilter::class,
                JeroenNoten\LaravelAdminLte\Menu\Filters\GateFilter::class,
            ],
            
            /*
            |--------------------------------------------------------------------------
            | Plugins Initialization
            |--------------------------------------------------------------------------
            |
            | Choose which JavaScript plugins should be included. At this moment,
            | only DataTables is supported as a plugin. Set the value to true
            | to include the JavaScript file from a CDN via a script tag.
            |
            */
            
            'plugins' => [
                'datatables' => true,
                'select2'    => true,
                'chartjs'    => true,
            ],
        ];
        