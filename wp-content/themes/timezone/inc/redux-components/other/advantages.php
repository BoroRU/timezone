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
        'title'      => esc_html__( 'Преимущества', 'your-textdomain-here' ),
        'id'         => 'advantages',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'advantages-first',
                'type'     => 'section',
                'title'    => esc_html__( 'Первое преимущество', 'your-textdomain-here' ),
                'indent'   => true, // Indent all options below until the next 'section' option is set.
            ),
            array(
                'id'       => 'advantages-first-icon',
                'type'     => 'text',
                'title'    => esc_html__( 'Иконка', 'your-textdomain-here' ),
            ),
            array(
                'id'       => 'advantages-first-title',
                'type'     => 'text',
                'title'    => esc_html__( 'Заголовок', 'your-textdomain-here' ),
            ),
            array(
                'id'       => 'advantages-first-description',
                'type'     => 'textarea',
                'title'    => esc_html__( 'Описание', 'your-textdomain-here' ),
            ),

            array(
                'id'       => 'advantages-second',
                'type'     => 'section',
                'title'    => esc_html__( 'Второе преимущество', 'your-textdomain-here' ),
                'indent'   => true, // Indent all options below until the next 'section' option is set.
            ),
            array(
                'id'       => 'advantages-second-icon',
                'type'     => 'text',
                'title'    => esc_html__( 'Иконка', 'your-textdomain-here' ),
            ),
            array(
                'id'       => 'advantages-second-title',
                'type'     => 'text',
                'title'    => esc_html__( 'Заголовок', 'your-textdomain-here' ),
            ),
            array(
                'id'       => 'advantages-second-description',
                'type'     => 'textarea',
                'title'    => esc_html__( 'Описание', 'your-textdomain-here' ),
            ),

            array(
                'id'       => 'advantages-third',
                'type'     => 'section',
                'title'    => esc_html__( 'Второе преимущество', 'your-textdomain-here' ),
                'indent'   => true, // Indent all options below until the next 'section' option is set.
            ),
            array(
                'id'       => 'advantages-third-icon',
                'type'     => 'text',
                'title'    => esc_html__( 'Иконка', 'your-textdomain-here' ),
            ),
            array(
                'id'       => 'advantages-third-title',
                'type'     => 'text',
                'title'    => esc_html__( 'Заголовок', 'your-textdomain-here' ),
            ),
            array(
                'id'       => 'advantages-third-description',
                'type'     => 'textarea',
                'title'    => esc_html__( 'Описание', 'your-textdomain-here' ),
            ),
        ),
    )
);
