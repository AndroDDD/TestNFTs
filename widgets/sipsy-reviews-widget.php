<?php

namespace Sipsy\ElementorWidgets\Widgets;

use Elementor\Widget_Base;

/**
 * Have the widget code for the Custom Elementor Nav Menu.
 */

class Sipsy_Reviews_Widget extends Widget_Base
{
    public function __construct($data = [], $args = null)
    {
        parent::__construct($data, $args);
        wp_enqueue_script('sipsy-reviews-widget-js', plugin_dir_url(__FILE__) . '../assets/js/sipsy-reviews-widget.js');
        wp_enqueue_style('sipsy-reviews-widget-css', plugin_dir_url(__FILE__) . '../assets/css/sipsy-reviews-widget.css');
    }

    public function get_name()
    {
        return 'sipsy-reviews-widget';
    }

    public function get_title()
    {
        return __('Sipsy Reviews', 'sipsy-elementor-widgets');
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
        return ['sipsy-reviews-widget-css'];
    }

    public function get_script_depends()
    {
        return ['sipsy-reviews-widget-js'];
    }

    // frontend
    protected function render()
    {

        // $settings = $this->get_settings_for_display();

        // Sipsy Reviews Widget Container
        echo '<section id="sipsy-reviews-container">';
        // Header title
        echo '<div class="header">';
        echo 'Customer Reviews';
        echo '</div>';

        // Widget reviews area
        echo '<div class="content">';
        // Widget branded review area
        echo '<div class="brand">';
        // Branded name area
        echo '<div class="logo">';
        echo '<img src="https://cdn.trustindex.io/assets/platform/Google/logo.svg" width="150px" height="25px" alt="Brand logo for reviews" />';
        echo '</div>';
        // Branded rating area
        echo '<div class="brand-rating">';
        echo '<img src="https://cdn.trustindex.io/assets/platform/Google/star/f.svg" width="30px" height="30px" alt="Average rating from brand" />';
        echo '<img src="https://cdn.trustindex.io/assets/platform/Google/star/f.svg" width="30px" height="30px" alt="Average rating from brand" />';
        echo '<img src="https://cdn.trustindex.io/assets/platform/Google/star/f.svg" width="30px" height="30px" alt="Average rating from brand" />';
        echo '<img src="https://cdn.trustindex.io/assets/platform/Google/star/f.svg" width="30px" height="30px" alt="Average rating from brand" />';
        echo '<img src="https://cdn.trustindex.io/assets/platform/Google/star/f.svg" width="30px" height="30px" alt="Average rating from brand" />';
        echo '</div>';
        // Branded message area
        echo '<strong class="brand-rating-message">';
        echo 'Excellent';
        echo '</strong>';
        //Branded extended message area
        echo '<span class="brand-rating-extended-message">';
        echo 'Based on ';
        echo '<strong>';
        echo '57 reviews';
        echo '</strong>';
        echo '.';
        echo '</span>';
        echo '</div>';

        // Individual reviews area
        echo '<div class="individual-reviews">';
        // Individual reviews left navigation button
        echo '<div class="left-button">';
        echo 'L';
        echo '</div>';

        // Individual reviews container
        echo '<div class="container">';
        // Individual review #1
        echo '<div class="review">';
        echo '</div>';
        // Individual review #2
        echo '<div class="review">';
        echo '</div>';
        echo '</div>';

        // Individual reviews right navigation button
        echo '<div class="right-button">';
        echo 'R';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</section>';
    }

    // backend
    protected function content_template()
    {
    }
}
