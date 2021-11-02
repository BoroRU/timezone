<?php
/**
 * Redux Framework typography config.
 * For full documentation, please visit: http://docs.redux.io/
 *
 * @package Redux Framework
 */

defined('ABSPATH') || exit;

Redux::set_section(
    $opt_name,
    array(
        'title' => esc_html__('Подвал', 'your-textdomain-here'),
        'id' => 'footer',
        'icon' => 'el el-align-center',
        'fields' => array(
            array(
                'id' => 'footer-cprt',
                'type' => 'textarea',
                'title' => esc_html__('Копирайт', 'your-textdomain-here'),
                'default' => 'Copyright &copy; All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="#" target="_blank">TimeZone</a>'
            )
        ),
    )
);
