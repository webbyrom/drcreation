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
                        'default' => '#ffffff',
                        'css' => '[ms_id] .flexslider .flex-direction-nav li a:before { background-color: [ms_value] }'
                    ),
                    array(
                        'label' => esc_html__('Hover', 'ml-slider'),
                        'name' => 'arrows_icon_hover',
                        'type' => 'color',
                        'default' => '#ffffff',
                        'css' => '[ms_id] .flexslider .flex-direction-nav li a:hover:before { background-color: [ms_value] }'
                    )
                )
            ),
            array(
                'label' => esc_html__('Icon Size', 'ml-slider'),
                'name' => 'arrows_icon_size',
                'type' => 'range',
                'default' => 28,
                'metric' => 'px',
                'min' => 10,
                'max' => 30,
                'css' => '[ms_id] .flexslider .flex-direction-nav li a:before { mask-size: [ms_value]px auto }'
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
                'label' => esc_html__('Vertical Position', 'ml-slider'),
                'name' => 'arrows_vertical_position',
                'type' => 'select',
                'default' => 'bottom',
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
                    'top' => '[ms_id] .flexslider:not(.filmstrip) .flex-direction-nav a { bottom: unset; top: [ms_field_value]px; }', // Take [ms_field_value] from arrows_vertical_position_offset
                    'bottom' => '[ms_id] .flexslider:not(.filmstrip) .flex-direction-nav a { top: unset; bottom: [ms_field_value]px; }' // Take [ms_field_value] from arrows_vertical_position_offset
                )
            ),
            array(
                'label' => esc_html__('Vertical Position Offset', 'ml-slider'),
                'info' => esc_html__('Based on "Position".', 'ml-slider'),
                'name' => 'arrows_vertical_position_offset',
                'type' => 'range',
                'default' => 25,
                'metric' => 'px',
                'min' => 0,
                'max' => 300,
                'css' => 'css_field', // Use the CSS from another field defined at 'css_field'
                'css_field' => 'arrows_vertical_position'
            ),
            array(
                'label' => esc_html__('Height', 'ml-slider'),
                'name' => 'arrows_height',
                'type' => 'range',
                'default' => 35,
                'metric' => 'px',
                'min' => 20,
                'max' => 60,
                'css' => '[ms_id] .flexslider .flex-direction-nav li a { height: [ms_value]px }'
            ),
            array(
                'label' => esc_html__('Border Radius', 'ml-slider'),
                'name' => 'arrows_border_radius',
                'type' => 'range',
                'default' => 0,
                'metric' => '%',
                'min' => 0,
                'max' => 50,
                'css' => '[ms_id] .flexslider .flex-direction-nav li a { border-radius: [ms_value]% }'
            ),
            array(
                'label' => esc_html__('Opacity (default)', 'ml-slider'),
                'name' => 'arrows_opacity',
                'type' => 'range',
                'default' => 1,
                'min' => 0.1,
                'max' => 1,
                'step' => 0.1,
                'css' => '[ms_id] .flexslider .flex-direction-nav li a:not(:hover) { opacity: [ms_value] }'
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
            ),
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
                        'name' => 'navigation_background_color',
                        'type' => 'color',
                        'default' => 'rgba(0,0,0,0)',
                        'css' => '[ms_id] .flexslider .flex-control-nav li a:not(.flex-active) { background: [ms_value] }'
                    ),
                    array(
                        'label' => esc_html__('Hover', 'ml-slider'),
                        'name' => 'navigation_background_color_hover',
                        'type' => 'color',
                        'default' => 'rgba(0,0,0,0)',
                        'css' => '[ms_id] .flexslider .flex-control-nav li a:hover { background: [ms_value] }'
                    ),
                    array(
                        'label' => esc_html__('Active', 'ml-slider'),
                        'name' => 'navigation_background_color_active',
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
                        'label' => esc_html__('Default', 'ml-slider'),
                        'name' => 'navigation_color',
                        'type' => 'color',
                        'default' => 'rgba(255,255,255,0)',
                        'css' => '[ms_id] .flexslider ol.flex-control-nav:not(.flex-control-thumbs) li a:not(.flex-active) { border-color: [ms_value] }'
                    ),
                    array(
                        'label' => esc_html__('Hover', 'ml-slider'),
                        'name' => 'navigation_color_hover',
                        'type' => 'color',
                        'default' => '#ffffff',
                        'css' =>  '[ms_id] .flexslider ol.flex-control-nav:not(.flex-control-thumbs) li a:hover { border-bottom-color: [ms_value] }'
                    ),
                    array(
                        'label' => esc_html__('Active', 'ml-slider'),
                        'name' => 'navigation_color_active',
                        'type' => 'color',
                        'default' => '#ffffff',
                        'css' => '[ms_id] .flexslider .flex-control-nav li a.flex-active { border-color: [ms_value] }'
                    )
                )
            ),
            array(
                'label' => esc_html__('Number Underline Width', 'ml-slider'),
                'name' => 'navigation_underline_width',
                'type' => 'range',
                'default' => 2,
                'metric' => 'px',
                'min' => 0,
                'max' => 10,
                'css' => '[ms_id] .flexslider ol.flex-control-nav li a { border-bottom-width: [ms_value]px }'
            ),
            array(
                'label' => esc_html__('Numbers Underline Style', 'ml-slider'),
                'name' => 'navigation_border_style',
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
                'css' => '[ms_id] .flexslider .flex-control-nav li a { border-bottom-style: [ms_value] }'
            ),
            array(
                'label' => esc_html__('Numbers', 'ml-slider'),
                'type' => 'fields',
                'fields' => array(
                    array(
                        'label' => esc_html__('Default', 'ml-slider'),
                        'name' => 'navigation_number_color',
                        'type' => 'color',
                        'default' => '#ffffff',
                        'css' => '[ms_id] .flexslider ol.flex-control-nav:not(.flex-control-thumbs) li a:not(.flex-active) { color: [ms_value] }'
                    ),
                    array(
                        'label' => esc_html__('Hover', 'ml-slider'),
                        'name' => 'navigation_number_color_hover',
                        'type' => 'color',
                        'default' => '#ffffff',
                        'css' =>  '[ms_id] .flexslider ol.flex-control-nav:not(.flex-control-thumbs) li a:hover { color: [ms_value] }'
                    ),
                    array(
                        'label' => esc_html__('Active', 'ml-slider'),
                        'name' => 'navigation_number_color_active',
                        'type' => 'color',
                        'default' => '#ffffff',
                        'css' => '[ms_id] .flexslider .flex-control-nav li a.flex-active { color: [ms_value] }'
                    )
                )
            ),
            array(
                'label' => esc_html__('Vertical Position', 'ml-slider'),
                'name' => 'navigation_vertical_position',
                'type' => 'select',
                'default' => 'bottom',
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
                    'top' => '[ms_id] .flexslider ol.flex-control-nav:not(.flex-control-thumbs) { bottom: unset; top: [ms_field_value]px }', // Take [ms_field_value] from navigation_vertical_position_offset
                    'bottom' => '[ms_id] .flexslider ol.flex-control-nav:not(.flex-control-thumbs) { top: unset; bottom: [ms_field_value]px }' // Take [ms_field_value] from navigation_vertical_position_offset
                )
            ),
            array(
                'label' => esc_html__('Vertical Position Offset', 'ml-slider'),
                'info' => esc_html__('Based on "Position".', 'ml-slider'),
                'name' => 'navigation_vertical_position_offset',
                'type' => 'range',
                'default' => 30,
                'metric' => 'px',
                'min' => -100,
                'max' => 300,
                'css' => 'css_field', // Use the CSS from another field defined at 'css_field'
                'css_field' => 'navigation_vertical_position'
            ),
            array(
                'label' => esc_html__('Alignment', 'ml-slider'),
                'name' => 'navigation_align',
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
                'css' => 'css_rules', // refer to css_rules where 'value' => '.lorem {}' is based on 'options' value
                'css_rules' => array(
                    'left' => '[ms_id] .flexslider .flex-control-nav { text-align: left; padding: 0 0 0 30px; }',
                    'right' => '[ms_id] .flexslider .flex-control-nav { text-align: right; padding: 0 30px 0; }',
                    'center' => '[ms_id] .flexslider .flex-control-nav { text-align: center; padding: 0; }'
                ),
            ),
            array(
                'label' => esc_html__('Dots Border Radius', 'ml-slider'),
                'name' => 'navigation_border_radius',
                'type' => 'range',
                'default' => 0,
                'metric' => 'px',
                'min' => 0,
                'max' => 50,
                'css' => '[ms_id] .flexslider .flex-control-nav li a { border-radius: [ms_value]px }'
            ),
            array(
                'label' => esc_html__('Dots Width', 'ml-slider'),
                'name' => 'navigation_width',
                'type' => 'range',
                'default' => 23,
                'metric' => 'px',
                'min' => 5,
                'max' => 30,
                'css' => '[ms_id] .flexslider .flex-control-paging li a { width: [ms_value]px }'
            ),
            /*array(
                'label' => esc_html__('Dots Height', 'ml-slider'),
                'name' => 'navigation_height',
                'type' => 'range',
                'default' => 26,
                'metric' => 'px',
                'min' => 5,
                'max' => 30,
                'css' => '[ms_id] .flexslider .flex-control-paging li a { height: [ms_value]px }'
            ),*/
            array(
                'label' => esc_html__('Number Size', 'ml-slider'),
                'name' => 'navigation_number_size',
                'type' => 'range',
                'default' => 14,
                'metric' => 'px',
                'min' => 5,
                'max' => 30,
                'css' => '[ms_id] .flexslider .flex-control-nav li a { font-size: [ms_value]px }'
            ),
            array(
                'label' => esc_html__('Number Line Height', 'ml-slider'),
                'name' => 'navigation_line_height',
                'type' => 'range',
                'default' => 1.2,
                'metric' => '',
                'min' => 0.5,
                'max' => 5,
                'step' => 0.1,
                'css' => '[ms_id] .flexslider .flex-control-nav li a { line-height: [ms_value] }'
            ),
            array(
                'label' => esc_html__('Distance Between Dots', 'ml-slider'),
                'name' => 'navigation_between',
                'type' => 'range',
                'default' => 2,
                'metric' => 'px',
                'min' => 0,
                'max' => 20,
                'css' => '[ms_id] .flexslider .flex-control-nav li a { margin: 0 [ms_value]px }'
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
                        'default' => 'rgba(0,0,0,0.8)',
                        'css' =>  '[ms_id] .flexslider .caption-wrap { background: linear-gradient(rgba(0,0,0,0),[ms_value]) }'
                    ),
                    array(
                        'label' => esc_html__('Text', 'ml-slider' ),
                        'name' => 'caption_text_color',
                        'type' => 'color',
                        'default' => '#ffffff',
                        'css' => '[ms_id] .flexslider .caption-wrap .caption { color: [ms_value] }'
                    ),
                    array(
                        'label' => esc_html__('Links', 'ml-slider'),
                        'name' => 'caption_links_color',
                        'type' => 'color',
                        'default' => '#ffffff',
                        'css' => '[ms_id] .flexslider .caption-wrap a { color: [ms_value] }'
                    )
                )
            ),
            array(
                'label' => esc_html__('Vertical Position', 'ml-slider'),
                'name' => 'caption_vertical_position',
                'type' => 'select',
                'default' => 'bottom',
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
                'css' => 'css_rules', // refer to css_rules where 'value' => '.lorem {}' is based on 'options' value
                'css_rules' => array(
                    'top' => '[ms_id] .flexslider ul.slides .caption-wrap { bottom: unset; top: [ms_field_value]%; transform: translateY(-[ms_field_value]%) }', // Take [ms_field_value] from caption_vertical_position_offset
                    'bottom' => '[ms_id] .flexslider ul.slides .caption-wrap { top: unset; bottom: [ms_field_value]%; transform: translateY([ms_field_value]%) }', // Take [ms_field_value] from caption_vertical_position_offset
                    
                )
            ),
            array(
                'label' => esc_html__('Vertical Position Offset', 'ml-slider'),
                'info' => esc_html__('Based on "Position".', 'ml-slider'),
                'name' => 'caption_vertical_position_offset',
                'type' => 'range',
                'default' => 0,
                'metric' => '%',
                'min' => 0,
                'max' => 100,
                'css' => 'css_field', // Use the CSS from another field defined at 'css_field'
                'css_field' => 'caption_vertical_position'
            ),
            array(
                'label' => esc_html__('Horizontal Position', 'ml-slider'),
                'name' => 'caption_horizontal_position',
                'type' => 'select',
                'default' => 'left',
                'options' => array(
                    array(
                        'label' => esc_html__('Right', 'ml-slider'),
                        'value' => 'right'
                    ),
                    array(
                        'label' => esc_html__('Left', 'ml-slider'),
                        'value' => 'left'
                    )
                ),
                'css' => 'css_rules', // refer to css_rules where 'value' => '.lorem {}' is based on 'options' value
                'css_rules' => array(
                    'right' => '[ms_id] .flexslider .caption-wrap { left: unset; right: [ms_field_value]% }', // Take [ms_field_value] from caption_horizontal_position_offset
                    'left' => '[ms_id] .flexslider .caption-wrap { right: unset; left: [ms_field_value]% }', // Take [ms_field_value] from caption_horizontal_position_offset 
                ),
            ),
            array(
                'label' => esc_html__('Horizontal Position Offset', 'ml-slider'),
                'info' => esc_html__('Based on "Horizontal Position".', 'ml-slider'),
                'name' => 'caption_horizontal_position_offset',
                'type' => 'range',
                'default' => 0,
                'metric' => '%',
                'min' => 0,
                'max' => 100,
                'css' => 'css_field', // Use the CSS from another field defined at 'css_field'
                'css_field' => 'caption_horizontal_position'
            ),
            array(
                'label' => esc_html__('Width', 'ml-slider'),
                'name' => 'caption_width',
                'type' => 'range',
                'default' => 100,
                'metric' => '%',
                'min' => 0,
                'max' => 100,
                'css' => '[ms_id] .flexslider .caption-wrap { width: [ms_value]% }'
            ),
            array(
                'label' => esc_html__('Font Size', 'ml-slider'),
                'name' => 'caption_font_size',
                'type' => 'range',
                'default' => 0.9,
                'metric' => 'rem',
                'min' => 0.5,
                'max' => 3,
                'step' => 0.1,
                'css' => '[ms_id] .flexslider .caption-wrap .caption { font-size: [ms_value]rem }'
            ),
            array(
                'label' => esc_html__('Line Height', 'ml-slider'),
                'name' => 'caption_line_height',
                'type' => 'range',
                'default' => 1.2,
                'metric' => 'rem',
                'min' => 0.5,
                'max' => 3,
                'step' => 0.1,
                'css' => '[ms_id] .flexslider .caption-wrap .caption { line-height: [ms_value]rem }'
            ),
            array(
                'label' => esc_html__('Text Align', 'ml-slider'),
                'name' => 'caption_text_align',
                'type' => 'select',
                'default' => 'center',
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
            ),
        )
    )
);