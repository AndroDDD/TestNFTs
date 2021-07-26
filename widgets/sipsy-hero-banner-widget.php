<?php

namespace Sipsy\ElementorWidgets\Widgets;

use Elementor\Widget_Base;

/**
 * Have the widget code for the Custom Elementor Nav Menu.
 */

class Sipsy_Hero_Banner_Widget extends Widget_Base
{
    public function __construct($data = [], $args = null)
    {
        parent::__construct($data, $args);
        wp_enqueue_script('sipsy-hero-banner-widget-js', plugin_dir_url(__FILE__) . '../assets/js/sipsy-hero-banner-widget.js');
        wp_enqueue_style('sipsy-hero-banner-widget-css', plugin_dir_url(__FILE__) . '../assets/css/sipsy-hero-banner-widget.css');
    }

    public function get_name()
    {
        return 'sipsy-hero-banner-widget';
    }

    public function get_title()
    {
        return __('Sipsy Hero Banner', 'sipsy-elementor-widgets');
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
        return ['sipsy-hero-banner-widget-css'];
    }

    public function get_script_depends()
    {
        return ['sipsy-hero-banner-widget-js'];
    }

    // frontend
    protected function render()
    {

        // $settings = $this->get_settings_for_display();

        // Sipsy Hero Banner Widget Container
        echo '<section id="sipsy-hero-banner-widget-container">';
        // Hero banner Header
        echo '<div class="header">';
        // Top header area
        echo '<div class="top">';
        echo 'We deliver LIQUOR,';
        echo '</div>';
        // Bottom header area
        echo '<div class="bottom">';
        echo 'No Fees.';
        echo '</div>';
        echo '</div>';

        // Hero banner form area
        echo '<div class="form">';
        // Form input area
        echo '<input class="form-input" />';
        // Form submit button
        echo '<button type="submit" class="submit-button">';
        echo '</button>';
        echo '</div>';

        // Hero banner footer
        echo '<div class="footer">';
        // Start of footer text
        echo 'Go to our ';
        // Footer link
        echo '<a href="https://sipsy.com/delivery-areas">';
        echo 'Delivery Area';
        echo '</a>';
        // End of footer text
        echo ' page for a list of delivery areas and map.';
        echo '</div>';
        echo '</section>';
    }

    // backend
    protected function content_template()
    {
    }
}
