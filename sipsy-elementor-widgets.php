<?php

/**
 * Plugin Name: Sipsy Elementor Widgets
 * Plugin URI: https://sipsy.com
 * Author: Andre Durham / Francis Ofori
 * Author URI: github.com/AndroDD
 * Description: Elementor widgets customized for Sipsy Storefront Theme
 * Version: 0.1.0
 * License: 0.1.0
 * License URL: https://sipsy.com
 * text-domain: sipsy-elementor-widgets
 */

namespace Sipsy\ElementorWidgets;

use Sipsy\ElementorWidgets\Widgets\Sipsy_Categories_Widget;
use Sipsy\ElementorWidgets\Widgets\Sipsy_Newsletter_Signup_Widget;
use Sipsy\ElementorWidgets\Widgets\Sipsy_Compact_Product_Display_Widget;
use Sipsy\ElementorWidgets\Widgets\Sipsy_Reviews_Widget;
use Sipsy\ElementorWidgets\Widgets\Sipsy_Hero_Banner_Widget;

if (!defined('ABSPATH')) {
    exit;
}

final class SipsyElementorWidgets
{
    const VERSION = '0.1.0';
    const ELEMENTOR_MINIMUM_VERSION = '3.0.0';
    const PHP_MINIMUM_VERSION = '7.0';

    private static $_instance = null;

    public function __construct()
    {
        add_action('init', [$this, 'i18n']);
        add_action('plugins_loaded', [$this, 'init_plugin']);
        add_action('elementor/elements/categories_registered', [$this, 'create_new_category']);
        add_action('elementor/widgets/widgets_registered', [$this, 'init_widgets']);
    }

    public function i18n()
    {
        load_plugin_textdomain('sipsy-elementor-widgets');
    }

    public function init_plugin()
    {
        // Check if have correct version of php
        // Check if have Elementor installed
        // Bring in widget classes
        // Bring in controls
    }

    public function init_controls()
    {
    }

    public function init_widgets()
    {
        // Require the widget class.
        require_once __DIR__ . '/widgets/sipsy-categories-widget.php';
        require_once __DIR__ . '/widgets/sipsy-newsletter-signup-widget.php';
        require_once __DIR__ . '/widgets/sipsy-compact-product-display-widget.php';
        require_once __DIR__ . '/widgets/sipsy-reviews-widget.php';
        require_once __DIR__ . '/widgets/sipsy-hero-banner-widget.php';

        // Register widget with elementor.
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new Sipsy_Categories_Widget());
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new Sipsy_Newsletter_Signup_Widget());
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new Sipsy_Compact_Product_Display_Widget());
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new Sipsy_Reviews_Widget());
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new Sipsy_Hero_Banner_Widget());
    }

    public static function get_instance()
    {
        if (null == self::$_instance) {
            self::$_instance = new Self();
        }
        return self::$_instance;
    }

    public function create_new_category($elements_manager)
    {
        $elements_manager->add_category(
            'sipsy',
            [
                'title' => __('Sipsy', 'sipsy-elementor-widgets'),
                'icon' => 'fa fa-plug'
            ]
        );
    }
}

SipsyElementorWidgets::get_instance();
