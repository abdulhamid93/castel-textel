<?php

use Botble\Base\Facades\BaseHelper;
use Botble\Shortcode\View\View;
use Botble\Theme\Theme;

return [

    /*
    |--------------------------------------------------------------------------
    | Inherit from another theme
    |--------------------------------------------------------------------------
    |
    | Set up inherit from another if the file is not exists,
    | this is work with "layouts", "partials" and "views"
    |
    | [Notice] assets cannot inherit.
    |
    */

    'inherit' => null, //default

    /*
    |--------------------------------------------------------------------------
    | Listener from events
    |--------------------------------------------------------------------------
    |
    | You can hook a theme when event fired on activities
    | this is cool feature to set up a title, meta, default styles and scripts.
    |
    | [Notice] these event can be override by package config.
    |
    */

    'events' => [

        // Listen on event before render a theme,
        // this event should call to assign some assets,
        // breadcrumb template.
        'beforeRenderTheme' => function (Theme $theme) {
            $version = get_cms_version();

            $theme->asset()->usePath()->add('bootstrapcss', 'clothe/css/bootstrap.min.css');
            $theme->asset()->usePath()->add('corecss', 'clothe/css/core.css');
            $theme->asset()->usePath()->add('shortcodes', 'clothe/css/shortcode/shortcodes.css');
            $theme->asset()->usePath()->add('style', 'clothe/css/style.css');
            $theme->asset()->usePath()->add('responsive', 'clothe/css/responsive.css');
            $theme->asset()->usePath()->add('customxss', 'clothe/css/custom.css');
            $theme->asset()->usePath()->add('skindefault', 'clothe/css/color/skin-default.css');

            if (BaseHelper::isRtlEnabled()) {
                $theme->asset()->usePath()->add('rtl-style', 'css/rtl-style.css', [], [], $version);
            }

            $theme->asset()->container('header')->usePath()->add('modernizr', 'clothe/js/vendor/modernizr-2.8.3.min.js');
            $theme->asset()->container('footer')->usePath()->add('jquery', 'clothe/js/vendor/jquery-1.12.0.min.js');
            $theme->asset()->container('footer')->usePath()->add('popper', 'clothe/js/popper.min.js');
            $theme->asset()->container('footer')->usePath()->add('bootstrapjs', 'clothe/js/bootstrap.min.js');
            $theme->asset()->container('footer')->usePath()->add('slidejquery', 'clothe/js/slider/jquery.nivo.slider.pack.js');
            $theme->asset()->container('footer')->usePath()->add('slidenivo', 'clothe/js/slider/nivo-active.js');
            $theme->asset()->container('footer')->usePath()->add('countdown', 'clothe/js/jquery.countdown.min.js');
            $theme->asset()->container('footer')->usePath()->add('plugins', 'clothe/js/plugins.js');
            $theme->asset()->container('footer')->usePath()->add('main', 'clothe/js/main.js');
            $theme->asset()->container('footer')->usePath()->add('customjs', 'clothe/js/custom.js');

            if (function_exists('shortcode')) {
                $theme->composer([
                    'page',
                    'post',
                    'ecommerce.product',
                    'ecommerce.products',
                    'ecommerce.product-category',
                    'ecommerce.product-tag',
                    'ecommerce.brand',
                    'ecommerce.search',
                    'ecommerce.cart',
                ], function (View $view) {
                    $view->withShortcodes();
                });
            }

            app()->booted(function () use ($theme) {
                $theme->asset()->remove('language-css');
                $theme->asset()->remove('language-public-js');
            });
        },
    ],
];
