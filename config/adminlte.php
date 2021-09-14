<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Title
    |--------------------------------------------------------------------------
    |
    | Here you can change the default title of your admin panel.
    |
    | For detailed instructions you can look the title section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'title' => 'ARGOSP - FC',
    'title_prefix' => '',
    'title_postfix' => '',

    /*
    |--------------------------------------------------------------------------
    | Favicon
    |--------------------------------------------------------------------------
    |
    | Here you can activate the favicon.
    |
    | For detailed instructions you can look the favicon section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'use_ico_only' => true,
    'use_full_favicon' => false,

    /*
    |--------------------------------------------------------------------------
    | Logo
    |--------------------------------------------------------------------------
    |
    | Here you can change the logo of your admin panel.
    |
    | For detailed instructions you can look the logo section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'logo' => '<b>A.R.G.O.S.P.</b>',
    'logo_img' => 'vendor/adminlte/dist/img/AdminLTELogo.png',
    'logo_img_class' => 'brand-image img-circle elevation-3',
    'logo_img_xl' => null,
    'logo_img_xl_class' => 'brand-image-xs',
    'logo_img_alt' => 'ARGOSP',

    /*
    |--------------------------------------------------------------------------
    | User Menu
    |--------------------------------------------------------------------------
    |
    | Here you can activate and change the user menu.
    |
    | For detailed instructions you can look the user menu section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'usermenu_enabled' => true,
    'usermenu_header' => true,
    'usermenu_header_class' => 'bg-primary',
    'usermenu_image' => true,
    'usermenu_desc' => true,
    'usermenu_profile_url' => false,

    /*
    |--------------------------------------------------------------------------
    | Layout
    |--------------------------------------------------------------------------
    |
    | Here we change the layout of your admin panel.
    |
    | For detailed instructions you can look the layout section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'layout_topnav' => null,
    'layout_boxed' => null,
    'layout_fixed_sidebar' => true,
    'layout_fixed_navbar' => true,
    'layout_fixed_footer' => null,
    'layout_dark_mode' => null,

    /*
    |--------------------------------------------------------------------------
    | Authentication Views Classes
    |--------------------------------------------------------------------------
    |
    | Here you can change the look and behavior of the authentication views.
    |
    | For detailed instructions you can look the auth classes section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'classes_auth_card' => '',
    'classes_auth_header' => 'bg-gradient-info',
    'classes_auth_body' => '',
    'classes_auth_footer' => 'd-none',
    'classes_auth_icon' => 'fa-lg text-info',
    'classes_auth_btn' => 'btn-flat btn-primary',

    /*
    |--------------------------------------------------------------------------
    | Admin Panel Classes
    |--------------------------------------------------------------------------
    |
    | Here you can change the look and behavior of the admin panel.
    |
    | For detailed instructions you can look the admin panel classes here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'classes_body' => '',
    'classes_brand' => 'bg-warning',
    'classes_brand_text' => '',
    'classes_content_wrapper' => '',
    'classes_content_header' => '',
    'classes_content' => '',
    'classes_sidebar' => 'sidebar-dark-primary elevation-4',
    'classes_sidebar_nav' => '',
    'classes_topnav' => 'navbar-white navbar-light',
    'classes_topnav_nav' => 'navbar-expand',
    'classes_topnav_container' => 'container',

    /*
    |--------------------------------------------------------------------------
    | Sidebar
    |--------------------------------------------------------------------------
    |
    | Here we can modify the sidebar of the admin panel.
    |
    | For detailed instructions you can look the sidebar section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'sidebar_mini' => 'lg',
    'sidebar_collapse' => false,
    'sidebar_collapse_auto_size' => false,
    'sidebar_collapse_remember' => false,
    'sidebar_collapse_remember_no_transition' => true,
    'sidebar_scrollbar_theme' => 'os-theme-light',
    'sidebar_scrollbar_auto_hide' => 'l',
    'sidebar_nav_accordion' => true,
    'sidebar_nav_animation_speed' => 300,

    /*
    |--------------------------------------------------------------------------
    | Control Sidebar (Right Sidebar)
    |--------------------------------------------------------------------------
    |
    | Here we can modify the right sidebar aka control sidebar of the admin panel.
    |
    | For detailed instructions you can look the right sidebar section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'right_sidebar' => false,
    'right_sidebar_icon' => 'fas fa-cogs',
    'right_sidebar_theme' => 'dark',
    'right_sidebar_slide' => true,
    'right_sidebar_push' => true,
    'right_sidebar_scrollbar_theme' => 'os-theme-light',
    'right_sidebar_scrollbar_auto_hide' => 'l',

    /*
    |--------------------------------------------------------------------------
    | URLs
    |--------------------------------------------------------------------------
    |
    | Here we can modify the url settings of the admin panel.
    |
    | For detailed instructions you can look the urls section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'use_route_url' => false,
    'dashboard_url' => '/',
    'logout_url' => 'logout',
    'login_url' => 'login',
    'register_url' => 'register',
    'password_reset_url' => 'password/reset',
    'password_email_url' => 'password/email',
    'profile_url' => false,

    /*
    |--------------------------------------------------------------------------
    | Laravel Mix
    |--------------------------------------------------------------------------
    |
    | Here we can enable the Laravel Mix option for the admin panel.
    |
    | For detailed instructions you can look the laravel mix section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Other-Configuration
    |
    */

    'enabled_laravel_mix' => false,
    'laravel_mix_css_path' => 'css/app.css',
    'laravel_mix_js_path' => 'js/app.js',

    /*
    |--------------------------------------------------------------------------
    | Menu Items
    |--------------------------------------------------------------------------
    |
    | Here we can modify the sidebar/top navigation of the admin panel.
    |
    | For detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Menu-Configuration
    |
    */

    'menu' => [
        // Navbar items:
        [
            'type'         => 'navbar-search',
            'text'         => 'search',
            'topnav_right' => true,
        ],
        [
            'type'         => 'fullscreen-widget',
            'topnav_right' => true,
        ],

        // Sidebar items:
       /*  [
            'type' => 'sidebar-menu-search',
            'text' => 'search',
        ], */
        [
            'text' => 'blog',
            'route'  => 'admin.home',
            'can'  => 'manage-blog',
        ],
        [
            'text'        => 'Indicadores FC',
            'route'         => 'admin.home',            
            'icon'        => 'fa fa-tachometer-alt fa-fw',            
            'can' => 'admin.home'
        ],
        [
            'text'        => 'Relacion de Personal',
            'url'         => '#',            
            'icon'        => 'fas fa-chalkboard-teacher',            
            //'can' => 'admin.home'
        ],
        
   		
    	[
     		'text'     => 'Mesas Seccion Primera' ,
     		'icon'     => 'fas fa-sitemap' ,
     		'submenu' => [
            	
            		[
     		'text'     => 'Personal' ,
     		'icon'     => 'fas fa-user-friends' ,
     		'submenu' => [
        		[
           		 	'text' => 'Cambios de Adscripcion' ,
                	'icon'     => 'fas fa-people-arrows' ,
            		 'url'   => '#' ,
        		],
        		[
            		'text' => 'Cambios de Bloque' ,
             		'url'   => '#' ,
        		],
    		],
		],
    	[
     		'text'     => 'Faltas e Incapacidades' ,
     		'icon'     => 'fas fa-user-injured' ,
     		'submenu' => [
        		[
           		 	'text' => 'Faltas' ,
            		 'url'   => '#' ,
        		],
        		[
            		'text' => 'Incapacidades' ,
                'icon'     => 'fas fa-user-injured' ,
             		'url'   => '#' ,
        		],
           		 [
           		 	'text' => 'COVID - 19' ,
                 'icon'     => 'fas fa-viruses' ,
            		 'url'   => '#' ,
        		],
    		],
		],
    	[
     		'text'     => 'Moral' ,
     		'icon'     => 'fas fa-umbrella-beach' ,
     		'submenu' => [
        		[
           		 	'text' => 'Vacaciones' ,
            		 'url'   => '#' ,
        		],
        		[
            		'text' => 'Licencias' ,
             		'url'   => '#' ,
        		],
    		],
		],
    	[
     		'text'     => 'CISEC' ,
     		'icon'     => 'fas fa-file-alt' ,
     		'submenu' => [
        		[
           		 	'text' => 'Vacaciones' ,
            		 'url'   => '#' ,
        		],
        		[
            		'text' => 'Licencias' ,
             		'url'   => '#' ,
        		],
    		],
		],
    	[
     		'text'     => 'Registro' ,
     		'icon'     => 'fas fa-book-reader' ,
     		'submenu' => [
        		[
           		 	'text' => 'CUP' ,
            		 'url'   => '#' ,
        		],
        		[
            		'text' => 'CUIP' ,
             		'url'   => '#' ,
        		],
    		],
		],
    	[
     		'text'     => 'L. O. C.' ,
     		'icon'     => 'far fa-address-card' ,
     		'submenu' => [
        		[
           		 	'text' => 'Portes de arma' ,
            		 'url'   => '#' ,
        		],
        		[
            		'text' => 'Vehiculos' ,
             		'url'   => '#' ,
        		],
    		],
		],
    
    	[
     		'text'     => 'Adiestramiento' ,
     		'icon'     => 'fas fa-user-graduate' ,
     		'submenu' => [
        		[
           		 	'text' => 'Cursos' ,
            		 'url'   => '#' ,
        		],
        		[
            		'text' => 'Meritos Policiales' ,
             		'url'   => '#' ,
        		],
    		],
		],

            
            
            ]
                    
         ],   
    	
    
    
        ['header' => 'ADMINISTRADOR',
        'can' => 'admin.users.index'
        ],
    
    	[
            'text'        => 'Usuarios',
            'route'         => 'admin.users.index',
            'icon'        => 'fas fa-users fa-fw',
            'can' => 'admin.users.index'
        ],

        [
            'text'        => 'Lista de Roles',
            'route'         => 'admin.roles.index',
            'icon'        => 'fas fa-users-cog fa-fw',
            //'can' => 'admin.users.index'
        ],
        [
            'text'     => 'Catalogos' ,
            'icon'     => 'fas fa-file-invoice' ,
            'submenu' => [
                [
                    'text' => 'Adscripciones 1',
                    'route'  => 'cat1adscripciones.index',
                    'icon' => 'fab fa-fw fa-buffer',
                    //'active' => ['admin/adscripciones1*'],
                    //'can' => 'admin.categories.index'
                ],
                [
                    'text' => 'Adscripciones 2',
                    'route'  => 'cat2adscripciones.index',
                    'icon' => 'fab fa-fw fa-buffer',
                    'active' => ['admin/adscripciones2*'],
                    //'can' => 'admin.categories.index'
                ],

                [
                    'text' => 'Grados',
                    'route'  => 'grados.index',
                    'icon' => 'fab fa-fw fa-buffer',
                    'active' => ['admin/grados*'],
                    //'can' => 'admin.categories.index'
                ],


                [
                    'text' => 'Categorias',
                    'route'  => 'admin.categories.index',
                    'icon' => 'fab fa-fw fa-buffer',
                    'active' => ['admin/categories*'],
                    'can' => 'admin.categories.index'
                ],
                [
                    'text' => 'Etiquetas',
                    'route'  => 'admin.tags.index',
                    'icon' => 'far fa-fw fa-bookmark',
                    'active' => ['admin/tags*'],
                    'can' => 'admin.tags.index'
                ],
           ],
       ],
        
                
        ['header' => 'OPCION DE PUBLICACIONES'],
        [
            'text'       => 'Lista de Publicaciones',
            'route'        => 'admin.posts.index',
            'icon' => 'fas fa-fw fa-clipboard',
            'can' => 'admin.posts.index'
        ],
        [
            'text'       => 'Crear nueva Publicacion',
            'route'        => 'admin.posts.create',
            'icon' => 'fas fa-fw fa-file',
            'can' => 'admin.posts.create'
        ],
        
    ],

    /*
    |--------------------------------------------------------------------------
    | Menu Filters
    |--------------------------------------------------------------------------
    |
    | Here we can modify the menu filters of the admin panel.
    |
    | For detailed instructions you can look the menu filters section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Menu-Configuration
    |
    */

    'filters' => [
        JeroenNoten\LaravelAdminLte\Menu\Filters\GateFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\HrefFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\SearchFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ActiveFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ClassesFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\LangFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\DataFilter::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Plugins Initialization
    |--------------------------------------------------------------------------
    |
    | Here we can modify the plugins used inside the admin panel.
    |
    | For detailed instructions you can look the plugins section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Plugins-Configuration
    |
    */

    'plugins' => [
        'Datatables' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css',
                ],
            ],
        ],
        'Select2' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.css',
                ],
            ],
        ],
        'Chartjs' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.bundle.min.js',
                ],
            ],
        ],
        'Sweetalert2' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.jsdelivr.net/npm/sweetalert2@8',
                ],
            ],
        ],
        'Pace' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/themes/blue/pace-theme-center-radar.min.css',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/pace.min.js',
                ],
            ],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | IFrame
    |--------------------------------------------------------------------------
    |
    | Here we change the IFrame mode configuration. Note these changes will
    | only apply to the view that extends and enable the IFrame mode.
    |
    | For detailed instructions you can look the iframe mode section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/IFrame-Mode-Configuration
    |
    */

    'iframe' => [
        'default_tab' => [
            'url' => null,
            'title' => null,
        ],
        'buttons' => [
            'close' => true,
            'close_all' => true,
            'close_all_other' => true,
            'scroll_left' => true,
            'scroll_right' => true,
            'fullscreen' => true,
        ],
        'options' => [
            'loading_screen' => 1000,
            'auto_show_new_tab' => true,
            'use_navbar_items' => true,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Livewire
    |--------------------------------------------------------------------------
    |
    | Here we can enable the Livewire support.
    |
    | For detailed instructions you can look the livewire here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Other-Configuration
    |
    */

    'livewire' => true,
];
