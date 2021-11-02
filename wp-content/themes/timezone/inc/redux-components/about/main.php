<?php
/**
 * Redux Framework text config.
 * For full documentation, please visit: http://docs.redux.io/
 *
 * @package Redux Framework
 */

defined('ABSPATH') || exit;

Redux::set_section(
    $opt_name,
    array(
        'title' => esc_html__('Верхняя секция', 'your-textdomain-heredfd'),
        'desc' => 'Редактирование верхней секции главной страницы',
        'id' => 'about-top-section',
        'subsection' => true,
        'customizer_width' => '700px',
        'fields' => array(
            array(
                'id' => 'about-top-section-title',
                'type' => 'text',
                'title' => esc_html__('Заголовок 2', 'your-textdomain-here'),
                'default' => 'Default Text',
            ),
            array(
                'id' => 'about-text',
                'type' => 'textarea',
                'title' => esc_html__('текст 2', 'your-textdomain-here'),
                'default' => 'Default Text',
            ),
            array(
                'id' => 'about-intro',
                'type' => 'textarea',
                'title' => esc_html__('текст 3', 'your-textdomain-here'),
                'default' => 'Default Text',
            ),
            array(
                'id' => 'about-section-title',
                'type' => 'textarea',
                'title' => esc_html__('текст с кодом', 'your-textdomain-here'),
                'default' => 'Default Text',
            ),
            array(
                'id' => 'about-title',
                'type' => 'text',
                'title' => esc_html__('Заголовок', 'your-textdomain-here'),
                'default' => 'Default Text',
            ),
        ),
    )
);
