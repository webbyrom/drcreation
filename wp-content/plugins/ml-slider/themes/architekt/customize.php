<?php
/**
 * Keep this file as is. 
 * You can optionally add array() values to allow to customize theme design
 * See themes/customize.php as reference
 */

return array(
    array(
        'label' => esc_html__('Arrows', 'ml-slider'),
        'name' => 'arrows',
        'type' => 'section',
        'default' => 'on',
        'settings' => array(
            array(
                'label' => esc_html__('Background', 'ml-slider'),
                'type' => 'fields', // Fields added through 'fields' array
                'fields' => array(
                    array(
                        'label' => esc_html__('Default', 'ml-slider'),
                        'name' => 'arrows_color',
                        'type' => 'color',
                        'default' => 'rgba(255,255,255,0)',
                        'css' => '[ms_id] .flexslider .flex-direction-nav li a { background: [ms_value] }'
                    ),
                    array(
                        'label' => esc_html__('Hover', 'ml-slider'),
                        'name' => 'arrows_color_hover',
                        'type' => 'color',
                        'default' => 'rgba(255,255,255,0)',
                        'css' => '[ms_id] .flexslider .flex-direction-nav li a:hover { background: [ms_value] }'
                    )
                )
            ),
            array(
                'label' => esc_html__('Icon Colors', 'ml-slider'),
                'type' => 'fields',
                'fields' => array(
                    array(
                        'label' => esc_html__('Default', 'ml-slider'),
                        'name' => 'arrows_icon',
                        'type' => 'color',
                        'default' => '#000000',
                        'css' => '[ms_id] .flexslider .flex-direction-nav li a:after { background-color: [ms_value] }'
                    ),
                    array(
                        'label' => esc_html__('Hover', 'ml-slider'),
                        'name' => 'arrows_icon_hover',
                        'type' => 'color',
                        'default' => '#000000',
                        'css' => '[ms_id] .flexslider .flex-direction-nav li a:hover::after { background-color: [ms_value] }'
                    )
                )
            ),
            array(
                'label' => esc_html__('Icon Size', 'ml-slider'),
                'name' => 'arrows_icon_size',
                'type' => 'range',
                'default' => 32,
                'metric' => 'px',
                'min' => 10,
                'max' => 50,
                'css' => '[ms_id] .flexslider ul.flex-direction-nav li a:after { mask-size: [ms_value]px auto }'
            ),
            array(
                'label' => esc_html__('Border Color', 'ml-slider'),
                'type' => 'fields',
                'fields' => array(
                    array(
                        'label' => esc_html__('Default', 'ml-slider'),
                        'name' => 'arrows_border',
                        'type' => 'color',
                        'default' => 'rgba(0,0,0,0)',
                        'css' => '[ms_id] .flexslider .flex-direction-nav li a { border-color: [ms_value] }'
                    ),
                    array(
                        'label' => esc_html__('Hover', 'ml-slider'),
                        'name' => 'arrows_border_hover',
                        'type' => 'color',
                        'default' => 'rgba(0,0,0,0)',
                        'css' => '[ms_id] .flexslider .flex-direction-nav li a:hover { border-color: [ms_value] }'
                    )
                ),
                'slideshow_edit' => false
            ),
            array(
                'label' => esc_html__('Border Width', 'ml-slider'),
                'name' => 'arrows_border_width',
                'type' => 'range',
                'default' => 0,
                'metric' => 'px',
                'min' => 0,
                'max' => 6,
                'css' => '[ms_id] .flexslider .flex-direction-nav li a { border-width: [ms_value]px }'
            ),
            array(
                'label' => esc_html__('Border Style', 'ml-slider'),
                'name' => 'arrows_border_style',
                'type' => 'select',
                'default' => 'solid',
                'options' => array(
                    array(
                        'label' => esc_html__('Solid', 'ml-slider'),
                        'value' => 'solid'
                    ),
                    array(
                        'label' => esc_html__('Dotted', 'ml-slider'),
                        'value' => 'dotted'
                    ),
                    array(
                        'label' => esc_html__('Dashed', 'ml-slider'),
                        'value' => 'dashed'
                    )
                ),
                'css' => '[ms_id] .flexslider .flex-direction-nav li a { border-style: [ms_value] }'
            ),
            array(
                'label' => esc_html__('Distance from Navigation', 'ml-slider'),
                'name' => 'arrows_distance_nav',
                'type' => 'range',
                'default' => -7,
                'metric' => 'px',
                'min' => -50,
                'max' => 50,
                'css' => array(
                    '[ms_id] .flexslider .flex-direction-nav li a.flex-prev { left: [ms_value]px }',
                    '[ms_id] .flexslider .flex-direction-nav li a.flex-next { right: [ms_value]px }'
                )
            ),
            /*array(
                'label' => esc_html__('Vertical Position', 'ml-slider'),
                'name' => 'arrows_vertical_position',
                'type' => 'select',
                'default' => 'top',
                'options' => array(
                    array(
                        'label' => esc_html__('Top', 'ml-slider'),
                        'value' => 'top'
                    ),
                    array(
                        'label' => esc_html__('Bottom', 'ml-slider'),
                        'value' => 'bottom'
                    )
                ),
                'css' => 'css_rules',
                'css_rules' => array(
                    //'default' => '',
                    'top' => '[ms_id] .flexslider .flex-direction-nav li a.flex-prev, [ms_id] .flexslider .flex-direction-nav li a.flex-next { bottom: unset; top: [ms_field_value]px }', // Take [ms_field_value] from arrows_vertical_position_offset
                    'bottom' => '[ms_id] .flexslider .flex-direction-nav li a.flex-prev, [ms_id] .flexslider .flex-direction-nav li a.flex-next { top: unset; bottom: [ms_field_value]px }' // Take [ms_field_value] from arrows_vertical_position_offset
                )
            ),
            array(
                'label' => esc_html__('Vertical Position Offset', 'ml-slider'),
                'info' => esc_html__('Based on "Position".', 'ml-slider'),
                'name' => 'arrows_vertical_position_offset',
                'type' => 'range',
                'default' => 23,
                'metric' => 'px',
                'min' => 0,
                'max' => 300,
                'css' => 'css_field', // Use the CSS from another field defined at 'css_field'
                'css_field' => 'arrows_vertical_position'
            ),*/
            array(
                'label' => esc_html__('Width', 'ml-slider'),
                'name' => 'arrows_width',
                'type' => 'range',
                'default' => 44,
                'metric' => 'px',
                'min' => 20,
                'max' => 60,
                'css' => '[ms_id] .flexslider ul.flex-direction-nav li a { width: [ms_value]px }'
            ),
            array(
                'label' => esc_html__('Height', 'ml-slider'),
                'name' => 'arrows_height',
                'type' => 'range',
                'default' => 30,
                'metric' => 'px',
                'min' => 20,
                'max' => 60,
                'css' => '[ms_id] .flexslider ul.flex-direction-nav li a { height: [ms_value]px }'
            ),
            array(
                'label' => esc_html__('Border Radius', 'ml-slider'),
                'name' => 'arrows_border_radius',
                'type' => 'range',
                'default' => 0,
                'metric' => 'px',
                'min' => 0,
                'max' => 50,
                'css' => '[ms_id] .flexslider ul.flex-direction-nav li a { border-radius: [ms_value]% }'
            ),
            array(
                'label' => esc_html__('Opacity (default)', 'ml-slider'),
                'name' => 'arrows_opacity',
                'type' => 'range',
                'default' => 1,
                'min' => 0.1,
                'max' => 1,
                'step' => 0.1,
                'css' => '[ms_id] .flexslider .flex-direction-nav li a { opacity: [ms_value] }'
            ),   
            array(
                'label' => esc_html__('Opacity (hover)', 'ml-slider'),
                'name' => 'arrows_opacity_hover',
                'type' => 'range',
                'default' => 1,
                'min' => 0.1,
                'max' => 1,
                'step' => 0.1,
                'css' => '[ms_id] .flexslider .flex-direction-nav li a:hover { opacity: [ms_value] }'
            ) 
        )
    ),
    array(
        'label' => esc_html__('Navigation', 'ml-slider'),
        'name' => 'navigation',
        'type' => 'section',
        'default' => 'on',
        'settings' => array(
            array(
                'label' => esc_html__('Background', 'ml-slider'),
                'type' => 'fields', // Fields added through 'fields' array
                'fields' => array(
                    array(
                        'label' => esc_html__('Default', 'ml-slider'),
                        'name' => 'navigation_color',
                        'type' => 'color',
                        'default' => 'rgba(0,0,0,0)',
                        'css' => '[ms_id] .flexslider .flex-control-nav li a:not(.flex-active) { background: [ms_value] }'
                    ),
                    array(
                        'label' => esc_html__('Hover', 'ml-slider'),
                        'name' => 'navigation_color_hover',
                        'type' => 'color',
                        'default' => 'rgba(0,0,0,0)',
                        'css' => '[ms_id] .flexslider .flex-control-nav li a:hover { background: [ms_value] }'
                    ),
                    array(
                        'label' => esc_html__('Active', 'ml-slider'),
                        'name' => 'navigation_color_active',
                        'type' => 'color',
                        'default' => 'rgba(0,0,0,0)',
                        'css' => '[ms_id] .flexslider .flex-control-nav li a.flex-active { background: [ms_value] }'
                    )
                )
            ),
            array(
                'label' => esc_html__('Numbers Underline Color', 'ml-slider'),
                'type' => 'fields',
                'fields' => array(
                    array(
                        'label' => esc_html__('Hover', 'ml-slider'),
                        'name' => 'navigation_color_underline',
                        'type' => 'color',
                        'default' => '#28303d',
                        'css' =>  '[ms_id] .flexslider ol.flex-control-nav:not(.flex-control-thumbs) li a:after { color: [ms_value] }'
                    ),
                    array(
                        'label' => esc_html__('Hover', 'ml-slider'),
                        'name' => 'navigation_color_underline_hover',
                        'type' => 'color',
                        'default' => '#28303d',
                        'css' =>  '[ms_id] .flexslider ol.flex-control-nav:not(.flex-control-thumbs) li a:hover:after { color: [ms_value] }'
                    ),
                    array(
                        'label' => esc_html__('Active', 'ml-slider'),
                        'name' => 'navigation_color_underline_active',
                        'type' => 'color',
                        'default' => '#28303d',
                        'css' => '[ms_id] .flexslider .flex-control-nav:not(.flex-control-thumbs) li a.flex-active:after { color: [ms_value] }'
                    )
                )
            ),
            array(
                'label' => esc_html__('Numbers Color', 'ml-slider'),
                'type' => 'fields',
                'fields' => array(
                    array(
                        'label' => esc_html__('Default', 'ml-slider'),
                        'name' => 'navigation_number_color',
                        'type' => 'color',
                        'default' => '#28303d',
                        'css' => '[ms_id] .flexslider ol.flex-control-nav:not(.flex-control-thumbs) li a:not(.flex-active) { color: [ms_value] }'
                    ),
                    array(
                        'label' => esc_html__('Hover', 'ml-slider'),
                        'name' => 'navigation_number_color_hover',
                        'type' => 'color',
                        'default' => '#28303d',
                        'css' =>  '[ms_id] .flexslider ol.flex-control-nav:not(.flex-control-thumbs) li a:hover { color: [ms_value] }'
                    ),
                    array(
                        'label' => esc_html__('Active', 'ml-slider'),
                        'name' => 'navigation_number_color_active',
                        'type' => 'color',
                        'default' => '#28303d',
                        'css' => '[ms_id] .flexslider .flex-control-nav li a.flex-active { color: [ms_value] }'
                    )
                )
            ),
            array(
                'label' => esc_html__('Numbers Size', 'ml-slider'),
                'name' => 'navigation_number_size',
                'type' => 'range',
                'default' => 11,
                'metric' => 'px',
                'min' => 5,
                'max' => 30,
                'css' => '[ms_id] .flexslider .flex-control-nav li a { font-size: [ms_value]px }'
            ),
            array(
                'label' => esc_html__('Numbers Line Height', 'ml-slider'),
                'name' => 'navigation_line_height',
                'type' => 'range',
                'default' => 15,
                'metric' => 'px',
                'min' => 5,
                'max' => 40,
                'css' => '[ms_id] .flexslider .flex-control-nav li a { line-height: [ms_value]px }'
            ),
            array(
                'label' => esc_html__('Distance Between Numbers', 'ml-slider'),
                'name' => 'navigation_between',
                'type' => 'range',
                'default' => 5,
                'metric' => 'px',
                'min' => 0,
                'max' => 20,
                'css' => '[ms_id] .flexslider .flex-control-nav li a { margin-right: [ms_value]px }'
            ),
        )
    ),
    array(
        'label' => esc_html__('Caption', 'ml-slider'),
        'name' => 'caption',
        'type' => 'section',
        'default' => 'on',
        'settings' => array(
            array(
                'label' => esc_html__('Colors', 'ml-slider'),
                'type' => 'fields',
                'fields' => array(
                    array(
                        'label' => esc_html__('Background', 'ml-slider'),
                        'name' => 'caption_background',
                        'type' => 'color',
                        'default' => 'rgba(255,255,255,0)',
                        'css' =>  '[ms_id] .flexslider .caption-wrap { background: [ms_value] }'
                    ),
                    array(
                        'label' => esc_html__('Text', 'ml-slider' ),
                        'name' => 'caption_text_color',
                        'type' => 'color',
                        'default' => '#28303d',
                        'css' => '[ms_id] .flexslider .caption-wrap .caption { color: [ms_value] }'
                    ),
                    array(
                        'label' => esc_html__('Links', 'ml-slider'),
                        'name' => 'caption_links_color',
                        'type' => 'color',
                        'default' => '#28303d',
                        'css' => '[ms_id] .flexslider .caption-wrap a { color: [ms_value] }'
                    )
                )
            ),
            array(
                'label' => esc_html__('Width', 'ml-slider'),
                'name' => 'caption_width',
                'type' => 'range',
                'default' => 100,
                'metric' => '%',
                'min' => 0,
                'max' => 100,
                'css' => '[ms_id] .flexslider .caption-wrap .caption { width: calc([ms_value]% - 300px) }'
            ),
            array(
                'label' => esc_html__('Font Size', 'ml-slider'),
                'name' => 'caption_font_size',
                'type' => 'range',
                'default' => 1,
                'metric' => 'em',
                'min' => 0.5,
                'max' => 3,
                'step' => 0.1,
                'css' => '[ms_id] .flexslider .caption-wrap .caption { font-size: [ms_value]em }'
            ),
            array(
                'label' => esc_html__('Line Height', 'ml-slider'),
                'name' => 'caption_line_height',
                'type' => 'range',
                'default' => 1.4,
                'metric' => 'em',
                'min' => 0.5,
                'max' => 3,
                'step' => 0.1,
                'css' => '[ms_id] .flexslider .caption-wrap .caption { line-height: [ms_value]em }'
            ),
            array(
                'label' => esc_html__('Text Align', 'ml-slider'),
                'name' => 'caption_text_align',
                'type' => 'select',
                'default' => 'left',
                'options' => array(
                    array(
                        'label' => esc_html__('Left', 'ml-slider'),
                        'value' => 'left'
                    ),
                    array(
                        'label' => esc_html__('Right', 'ml-slider'),
                        'value' => 'right'
                    ),
                    array(
                        'label' => esc_html__('Center', 'ml-slider'),
                        'value' => 'center'
                    )
                ),
                'css' => '[ms_id] .flexslider .caption-wrap .caption { text-align: [ms_value] }'
            )
        )
    )
);