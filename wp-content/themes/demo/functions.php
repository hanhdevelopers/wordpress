<?php
/**
 * setup
 */
function demo_setup()
{
    // Enable support for custom logo.
    add_theme_support('custom-logo', array(
        'height' => 160,
        'width' => 160,
        'flex-height' => true,
        'flex-width' => true,
        'header-text' => array('site-title', 'site-description'),
    ));

    // This theme uses wp_nav_menu() in two locations.
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'demo'),
        'social' => __('Social Links Menu', 'demo'),
    ));
}

add_action('after_setup_theme', 'demo_setup');

/**
 * Logo custom
 */
function demo_the_custom_logo()
{
    if (function_exists('the_custom_logo')) {
        the_custom_logo();
    }
}

function demo_change_logo_class($html)
{
    $html = str_replace('custom-logo-link', '', $html);
    $html = str_replace('custom-logo', '', $html);

    return $html;
}

add_filter('get_custom_logo', 'demo_change_logo_class');

/**
 * Registers a widget area.
 */
function demo_widgets_init()
{
    register_sidebar(array(
        'name' => __('Footer', 'demo'),
        'id' => 'demo-sidebar-footer',
        'description' => __('Add widgets here to appear in your footer.', 'demo'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
}

add_action('widgets_init', 'demo_widgets_init');

function add_theme_options($wp_customize)
{
    $wp_customize->add_section(
        'theme_footer_options',
        array(
            'title' => __('Footer Settings', 'demo'),
            //'capability' => 'edit_theme_options',
            'description' => __('Change footer options here.', 'demo'),
            'priority' => 120
        )
    );
    $wp_customize->add_setting('email_contact',
        array(
            'default' => 'demo@gmail.com',
            "transport" => "refresh"
        )
    );
    $wp_customize->add_setting('phone_contact',
        array(
            'default' => '',
            "transport" => "refresh"
        )
    );
    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'contact',
        array(
            'label' => __('Contact', 'demo'),
            'section' => 'theme_footer_options',
            'settings' => 'phone_contact',
            'priority' => 10,
        )
    ));
    //$wp_customize->get_setting('footer_bg_color')->transport = 'postMessage';
}

add_action("customize_register", "add_theme_options");
