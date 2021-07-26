<?php

namespace Sipsy\ElementorWidgets\Widgets;

use Elementor\Widget_Base;

/**
 * Have the widget code for the Custom Elementor Nav Menu.
 */

class Sipsy_Newsletter_Signup_Widget extends Widget_Base
{
    public function __construct($data = [], $args = null)
    {
        parent::__construct($data, $args);
        wp_enqueue_script('sipsy-newsletter-signup-widget-js', plugin_dir_url(__FILE__) . '../assets/js/sipsy-newsletter-signup-widget.js');
        wp_enqueue_style('sipsy-newsletter-signup-widget-css', plugin_dir_url(__FILE__) . '../assets/css/sipsy-newsletter-signup-widget.css');
    }

    public function get_name()
    {
        return 'sipsy-newsletter-signup-widget';
    }

    public function get_title()
    {
        return __('Sipsy Newsletter Sign Up', 'sipsy-elementor-widgets');
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
        return ['sipsy-newsletter-signup-widget-css'];
    }

    public function get_script_depends()
    {
        return ['sipsy-newsletter-signup-widget-js'];
    }

    // frontend
    protected function render()
    {

        // $settings = $this->get_settings_for_display();

        // Sipsy Newsletter Signup Widget Container
        echo '<section id="sipsy-newsletter-signup-widget-container">';
        // Sipsy mini icon
        echo '<div class="mini-icon">';
        echo '<img src="https://sipsy.com/wp-content/themes/wds/img/yellow_sticker.svg" width="67px" height="67px" alt="Sipsy mini icon for newsletter" />';
        echo '</div>';

        // Information area to the left
        echo '<div class="information">';
        // Information area top part
        echo '<div class="top">';
        echo 'Stay In The Know';
        echo '</div>';
        // Information area bottom part
        echo '<div class="bottom">';
        echo 'Get info about new products, limited deals, and new delivery areas.';
        echo '</div>';
        echo '</div>';

        // Form area to the right
        echo '<form class="form">';
        // Form input area
        echo '<input class="form-input" type="text" placeholder="Your Email" name="email" />';
        // Form submit button
        echo '<div class="form-submit">';
        echo 'SEND';
        echo '</div>';
        echo '</form>';
        echo '</section>';
    }

    // backend
    protected function content_template()
    {
    }
}
