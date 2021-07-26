<?php

namespace Sipsy\ElementorWidgets\Widgets;

use Elementor\Widget_Base;

/**
 * Have the widget code for the Custom Elementor Nav Menu.
 */

class Sipsy_Categories_Widget extends Widget_Base
{

    public $products;
    public $productCategories;
    public function __construct($data = [], $args = null)
    {
        parent::__construct($data, $args);
        wp_enqueue_script('sipsy-categories-widget-js', plugin_dir_url(__FILE__) . '../assets/js/sipsy-categories-widget.js');
        wp_enqueue_style('sipsy-categories-widget-css', plugin_dir_url(__FILE__) . '../assets/css/sipsy-categories-widget.css');
        $this->products = wc_get_products([
            'category' => ['liquor'],
            'limit' => 6,
            'orderby' => 'date',
            'order' => 'ASC',
            'return' => 'object',
        ]);
        $this->productCategories = ['liquor', 'beer', 'gin'];
    }

    public function get_name()
    {
        return 'sipsy-categories-widget';
    }

    public function get_title()
    {
        return __('Sipsy Categories', 'sipsy-elementor-widgets');
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
            'category-or-product-index',
            [
                'label' => 'Category or Product Index',
                'label_block' => true,
                'type' => \Elementor\Controls_Manager::NUMBER,
                'min' => 1,
                'max' => 6,
                'default' => __(2, 'sipsy-elementor-widgets'),
            ]
        );

        $this->end_controls_section();
    }

    public function get_style_depends()
    {
        return ['sipsy-categories-widget-css'];
    }

    public function get_script_depends()
    {
        return ['sipsy-categories-widget-js'];
    }

    // frontend
    protected function render()
    {

        // $settings = $this->get_settings_for_display();
        // $productDescription = $this->products[$settings['product-id'] - 1]->get_description();
        // $productCategory = $this->productCategories[$settings['category-or-product-index'] - 1];

        // Sipsy Categories Widget Container
        echo '<section id="sipsy-categories-widget-container">';

        // Sipsy Categories Widget Head Title Element
        echo '<div class="sipsy-categories-widget-title">';
        echo 'Choose Your Sip';
        echo '</div>';

        // Sipsy Categories Widget Grid
        echo '<div class="sipsy-categories-widget-grid">';
        // Sipsy Categories Widget First Grid Item
        echo '<div class="sipsy-categories-widget-item first">';
        // Sipsy Categories Widget Grid Item Image
        echo '<div class="sipsy-categories-widget-item-image">';
        echo '<img src="https://sipsy.com/wp-content/uploads/2021/02/sipsy-beer-graphic.png" width="207px" height="248px" alt="first category or product name" />';
        echo '</div>';
        // Sipsy Categories Widget Grid Item Name
        echo '<div class="sipsy-categories-widget-item-name">';
        echo 'Beer';
        echo '</div>';
        // Sipsy Categories Widget Grid Item Description
        echo '<div class="sipsy-categories-widget-item-description">';
        echo 'Sipsy makes the beer delivery service so much better. We ensure the...';
        echo '</div>';
        echo '</div>';

        // Sipsy Categories Widget Second Grid Item
        echo '<div class="sipsy-categories-widget-item second">';
        // Sipsy Categories Widget Grid Item Image
        echo '<div class="sipsy-categories-widget-item-image">';
        echo '<img src="https://sipsy.com/wp-content/uploads/2021/02/sipsy-seltzer-graphic-1.png" width="207px" height="248px" alt="second category or product name" />';
        echo '</div>';
        // Sipsy Categories Widget Grid Item Name
        echo '<div class="sipsy-categories-widget-item-name">';
        echo 'Hard Seltzer';
        echo '</div>';
        // Sipsy Categories Widget Grid Item Description
        echo '<div class="sipsy-categories-widget-item-description">';
        echo 'Sipsy makes the beer delivery service so much better. We ensure the...';
        echo '</div>';
        echo '</div>';

        // Sipsy Categories Widget Third Grid Item
        echo '<div class="sipsy-categories-widget-item third">';
        // Sipsy Categories Widget Grid Item Image
        echo '<div class="sipsy-categories-widget-item-image">';
        echo '<img src="https://sipsy.com/wp-content/uploads/2021/02/sipsy-liquor-graphic.png" width="207px" height="248px" alt="second category or product name" />';
        echo '</div>';
        // Sipsy Categories Widget Grid Item Name
        echo '<div class="sipsy-categories-widget-item-name">';
        echo 'Liquor';
        echo '</div>';
        // Sipsy Categories Widget Grid Item Description
        echo '<div class="sipsy-categories-widget-item-description">';
        echo 'Sipsy makes the beer delivery service so much better. We ensure the...';
        echo '</div>';
        echo '</div>';

        // Sipsy Categories Widget Fourth Grid Item
        echo '<div class="sipsy-categories-widget-item fourth">';
        // Sipsy Categories Widget Grid Item Image
        echo '<div class="sipsy-categories-widget-item-image">';
        echo '<img src="https://sipsy.com/wp-content/uploads/2021/02/sipsy-snacks-graphic-1.png" width="207px" height="248px" alt="second category or product name" />';
        echo '</div>';
        // Sipsy Categories Widget Grid Item Name
        echo '<div class="sipsy-categories-widget-item-name">';
        echo 'Snacks';
        echo '</div>';
        // Sipsy Categories Widget Grid Item Description
        echo '<div class="sipsy-categories-widget-item-description">';
        echo 'Sipsy makes the beer delivery service so much better. We ensure the...';
        echo '</div>';
        echo '</div>';

        // Sipsy Categories Widget Fifth Grid Item
        echo '<div class="sipsy-categories-widget-item fifth">';
        // Sipsy Categories Widget Grid Item Image
        echo '<div class="sipsy-categories-widget-item-image">';
        echo '<img src="https://sipsy.com/wp-content/uploads/2021/02/sipsy-tobacco-graphic.png" width="207px" height="248px" alt="second category or product name" />';
        echo '</div>';
        // Sipsy Categories Widget Grid Item Name
        echo '<div class="sipsy-categories-widget-item-name">';
        echo 'Tobacco';
        echo '</div>';
        // Sipsy Categories Widget Grid Item Description
        echo '<div class="sipsy-categories-widget-item-description">';
        echo 'Sipsy makes the beer delivery service so much better. We ensure the...';
        echo '</div>';
        echo '</div>';

        // Sipsy Categories Widget Sixth Grid Item
        echo '<div class="sipsy-categories-widget-item sixth">';
        // Sipsy Categories Widget Grid Item Image
        echo '<div class="sipsy-categories-widget-item-image">';
        echo '<img src="https://sipsy.com/wp-content/uploads/2021/02/sipsy-wine-graphic.png" width="207px" height="248px" alt="second category or product name" />';
        echo '</div>';
        // Sipsy Categories Widget Grid Item Name
        echo '<div class="sipsy-categories-widget-item-name">';
        echo 'Wine';
        echo '</div>';
        // Sipsy Categories Widget Grid Item Description
        echo '<div class="sipsy-categories-widget-item-description">';
        echo 'Sipsy makes the beer delivery service so much better. We ensure the...';
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
