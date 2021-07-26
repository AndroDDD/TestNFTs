<?php

namespace Sipsy\ElementorWidgets\Widgets;

use Elementor\Widget_Base;

/**
 * Have the widget code for the Custom Elementor Nav Menu.
 */

class Sipsy_Compact_Product_Display_Widget extends Widget_Base
{
    public function __construct($data = [], $args = null)
    {
        parent::__construct($data, $args);
        wp_enqueue_script('sipsy-compact-product-display-widget-js', plugin_dir_url(__FILE__) . '../assets/js/sipsy-compact-product-display-widget.js');
        wp_enqueue_style('sipsy-compact-product-display-widget-css', plugin_dir_url(__FILE__) . '../assets/css/sipsy-compact-product-display-widget.css');
    }

    public function get_name()
    {
        return 'sipsy-compact-product-display-widget';
    }

    public function get_title()
    {
        return __('Sipsy Compact Product Display', 'sipsy-elementor-widgets');
    }

    public function get_icon()
    {
        // return 'fa fa-menu';
        return 'eicon-nav-menu';
    }

    public function get_categories()
    {
        // TODO Add out own category in Elementor.
        return ['sipsy'];
    }

    public function _register_controls()
    {
        $this->start_controls_section(
            'section_content',
            [
                'label' => 'Settings',
            ]
        );

        $this->add_control(
            'first-field',
            [
                'label' => 'First Field',
                'label_block' => true,
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __('My First Field', 'sipsy-elementor-widgets'),
            ]
        );

        $this->end_controls_section();
    }
    public function get_style_depends()
    {
        return ['sipsy-compact-product-display-widget-css'];
    }

    public function get_script_depends()
    {
        return ['sipsy-compact-product-display-widget-js'];
    }

    // frontend
    protected function render()
    {

        // $settings = $this->get_settings_for_display();

        // Sipsy Compact Product Display Widget Container
        echo '<section id="sipsy-compact-product-display-widget-container">';
        // Information area
        echo '<div class="information">';
        // Title section of information area
        echo '<div class="title">';
        echo 'Support Local Business';
        echo '</div>';
        // Details section of information area
        echo '<div class="details">';
        echo 'When you shop Sipsy, you are supporting a local business in the LA Valley. Sipsy launched in 2019 to bring convenience to Valley residents located in Sherman Oaks, Studio City, Van Nuys, North Hollywood, Burbank, and Toluca Lake.';
        echo '</div>';
        // Link section of information area
        echo '<a>';
        echo 'About Us';
        echo '</a>';
        echo '</div>';

        // Image area
        echo '<div class="image">';
        echo '<img src="https://sipsy.com/wp-content/uploads/2021/02/shop-local.jpg" width="330px" height="100%" alt="information image" />';
        echo '</div>';
        echo '</section>';
    }

    // backend
    protected function content_template()
    {
    }
}
