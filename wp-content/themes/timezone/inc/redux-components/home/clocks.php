<?php
/**
 * Redux Framework section config.
 * For full documentation, please visit: http://docs.redux.io/
 *
 * @package Redux Framework
 */

defined( 'ABSPATH' ) || exit;

Redux::set_section(
    $opt_name,
    array(
        'title'      => esc_html__( 'Часы', 'your-textdomain-here' ),
        'id'         => 'home-clocks',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'clocks-first',
                'type'     => 'section',
                'title'    => esc_html__( 'Часы №1', 'your-textdomain-here' ),
                'indent'   => true, // Indent all options below until the next 'section' option is set.
            ),
            array(
                'id'           => 'clocks-first-image',
                'type'         => 'media',
                'url'          => true,
                'title'        => esc_html__( 'Фото часов', 'your-textdomain-here' ),
                'compiler'     => 'true',
                'preview_size' => 'full',
            ),
            array(
                'id'       => 'clocks-first-title',
                'type'     => 'text',
                'title'    => esc_html__( 'Заголовок', 'your-textdomain-here' ),
            ),
            array(
                'id'       => 'clocks-first-description',
                'type'     => 'textarea',
                'title'    => esc_html__( 'Описание', 'your-textdomain-here' ),
            ),
            array(
                'id'       => 'clocks-first-link',
                'type'     => 'text',
                'default' => '#',
                'title'    => esc_html__( 'Ссылка на кнопку', 'your-textdomain-here' ),
            ),
            array(
                'id'       => 'clocks-second',
                'type'     => 'section',
                'title'    => esc_html__( 'Часы №2', 'your-textdomain-here' ),
                'indent'   => true, // Indent all options below until the next 'section' option is set.
            ),
            array(
                'id'           => 'clocks-second-image',
                'type'         => 'media',
                'url'          => true,
                'title'        => esc_html__( 'Фото часов', 'your-textdomain-here' ),
                'compiler'     => 'true',
                'preview_size' => 'full',
            ),
            array(
                'id'       => 'clocks-second-title',
                'type'     => 'text',
                'title'    => esc_html__( 'Заголовок', 'your-textdomain-here' ),
            ),
            array(
                'id'       => 'clocks-second-description',
                'type'     => 'textarea',
                'title'    => esc_html__( 'Описание', 'your-textdomain-here' ),
            ),
            array(
                'id'       => 'clocks-second-link',
                'type'     => 'text',
                'default' => '#',
                'title'    => esc_html__( 'Ссылка на кнопку', 'your-textdomain-here' ),
            ),
        ),
    )
);
