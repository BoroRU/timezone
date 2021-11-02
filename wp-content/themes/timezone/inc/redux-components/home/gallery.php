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
        'title' => esc_html__('Галерея', 'your-textdomain-here'),
        'id' => 'home-gallery',
        'subsection' => true,
        'customizer_width' => '700px',
        'fields' => array(
            array(
                'id'       => 'home-gallery-list',
                'type'     => 'gallery',
                'title'    => esc_html__( 'Добавить/Изменить галарею', 'your-textdomain-here' ),
                'desc'     => esc_html__( 'Тут вы можете создать свою галерею для главной страницы', 'your-textdomain-here' ),
            ),
        ),
    )
);
