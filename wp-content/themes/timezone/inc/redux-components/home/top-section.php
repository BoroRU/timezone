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
        'title' => esc_html__('Верхняя секция', 'your-textdomain-here'),
        'desc' => 'Редактирование верхней секции главной страницы',
        'id' => 'home-top-section',
        'subsection' => true,
        'customizer_width' => '700px',
        'fields' => array(
            array(
                'id' => 'home-top-section-title',
                'type' => 'text',
                'title' => esc_html__('Заголовок', 'your-textdomain-here'),
                'default' => 'Default Text',
            ),
            array(
                'id' => 'home-top-section-desc',
                'type' => 'textarea',
                'title' => esc_html__('Описание', 'your-textdomain-here'),
                'default' => 'Default Text',
            ),
            array(
                'id' => 'home-top-section-link',
                'type' => 'text',
                'title' => esc_html__('Ссылка на кнопку', 'your-textdomain-here'),
                'default' => '#',
            ),
            array(
                'id'           => 'home-top-section-image',
                'type'         => 'media',
                'url'          => true,
                'title'        => esc_html__( 'Изображение', 'your-textdomain-here' ),
                'compiler'     => 'true',
                'preview_size' => 'full',
            ),
        ),
    )
);
