<?php
/**
 * Redux Framework text config.
 * For full documentation, please visit: http://docs.redux.io/
 *
 * @package Redux Framework
 */

defined( 'ABSPATH' ) || exit;

Redux::set_section(
    $opt_name,
    array(
        'title'            => esc_html__( 'Видео', 'your-textdomain-here' ),
        'id'               => 'home-video',
        'subsection'       => true,
        'customizer_width' => '700px',
        'fields'           => array(
            array(
                'id'           => 'home-video-preview',
                'type'         => 'media',
                'url'          => true,
                'title'        => esc_html__( 'Превью', 'your-textdomain-here' ),
                'compiler'     => 'true',
                'preview_size' => 'full',
            ),
            array(
                'id'       => 'home-video-link',
                'type'     => 'text',
                'title'    => esc_html__( 'Ссылка на видео', 'your-textdomain-here' ),
                'default'  => '#',
            ),
        ),
    )
);
