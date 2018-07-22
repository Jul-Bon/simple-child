<?php
/**
 * Simple Chold Customizer/Theme Options
 *
 */


function child_customize_register( $wp_customize ) {

    //All our sections, settings, and controls will be added here
    //Add section for unique theme settings
    $wp_customize->add_section('home_page', array(
        'title' => __('Stopnasylstvo Home Page', 'simple_child'),
        'priority' => 20,
    ));


    //Title section
    $wp_customize->add_setting('main_title', array(
        'default' => __('Site title', 'simple_child'),
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('main_title', array(
        'label' => __('Site Title', 'simple_child'),
        'section' => 'home_page',
        'settings' => 'title_blog_section',
        'type' => 'text',
    ));


    //Add settings for buttons panel
    //Donate button
    $wp_customize->add_setting('donate_button', array(
        'default' => __('Text for donate button', 'simple_child'),
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('donate_button', array(
        'label' => __('Title for donate button', 'simple_child'),
        'section' => 'home_page',
        'settings' => 'donate_button',
        'type' => 'text',
    ));

    $wp_customize->add_setting('url_donate_button', array(
        'default' => __('Url for donate button', 'simple_child'),
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('url_donate_button', array(
        'label' => __('Url for donate button', 'simple_child'),
        'section' => 'home_page',
        'settings' => 'url_donate_button',
        'type' => 'url',
    ));

    $wp_customize->add_setting('button_display', array(
        'default' => true,
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('button_display', array(
        'label' => 'Donate Button Display',
        'section' => 'home_page',
        'settings' => 'button_display',
        'type' => 'radio',
        'choices' => array(
            'show' => 'Show Button',
            'hide' => 'Hide Button',
        ),
    ));

    //Help button
    $wp_customize->add_setting('help_button', array(
        'default' => __('Text for help button', 'simple_child'),
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('help_button', array(
        'label' => __('Title for help button', 'simple_child'),
        'section' => 'home_page',
        'settings' => 'help_button',
        'type' => 'text',
    ));

    $wp_customize->add_setting('url_help_button', array(
        'default' => __('Url for help button', 'simple_child'),
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('url_help_button', array(
        'label' => __('Url for help button', 'simple_child'),
        'section' => 'home_page',
        'settings' => 'url_help_button',
        'type' => 'url',
    ));

    //Quick exit button
    $wp_customize->add_setting('exit_button', array(
        'default' => __('Text for quick exit button', 'simple_child'),
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('exit_button', array(
        'label' => __('Title for quick exit button', 'simple_child'),
        'section' => 'home_page',
        'settings' => 'exit_button',
        'type' => 'text',
    ));

    $wp_customize->add_setting('url_exit_button', array(
        'default' => __('Url for quick exit button', 'simple_child'),
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('url_exit_button', array(
        'label' => __('Url for quick exit button', 'simple_child'),
        'section' => 'home_page',
        'settings' => 'url_exit_button',
        'type' => 'url',
    ));

    //Hot phone line settings
    $wp_customize->add_setting('title_phone_line', array(
        'default' => __('Title for phone line', 'simple_child'),
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('title_phone_line', array(
        'label' => __('Title for phone line', 'simple_child'),
        'section' => 'home_page',
        'settings' => 'title_phone_line',
        'type' => 'text',
    ));

    $wp_customize->add_setting('number_phone_line', array(
        'default' => __('Title for phone line', 'simple_child'),
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('number_phone_line', array(
        'label' => __('Phone Number', 'simple_child'),
        'section' => 'home_page',
        'settings' => 'number_phone_line',
        'type' => 'text',
    ));
    //Title section
    $wp_customize->add_setting('title_blog_section', array(
        'default' => __('Останні новини', 'simple_child'),
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('title_blog_section', array(
        'label' => __('Title blog section', 'simple_child'),
        'section' => 'home_page',
        'settings' => 'title_blog_section',
        'type' => 'text',
    ));

    //Block "Name organization"
    $wp_customize->add_setting('name_organization', array(
        'default' => __('Name organization', 'simple_child'),
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('name_organization', array(
        'label' => __('Name organization', 'simple_child'),
        'section' => 'home_page',
        'settings' => 'name_organization',
        'type' => 'text',
    ));

    //Block "Who we are"
    $wp_customize->add_setting('who_we_are', array(
        'default' => __('Who we are', 'simple_child'),
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('who_we_are', array(
        'label' => __('Who we are', 'simple_child'),
        'section' => 'home_page',
        'settings' => 'who_we_are',
        'type' => 'text',
    ));

    //Block description site
    $wp_customize->add_setting('block-description', array(
        'default' => __('Duis porta ullamcorper ultricies. Orci varius natoque penatibus et magnis dis parturient ', 'simple_child'),
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('block-description', array(
        'label' => __('Block description', 'simple_child'),
        'section' => 'home_page',
        'settings' => 'block-description',
        'type' => 'textarea',
    ));

    //Footer-part settings
    //Settings for subscribe form
    //Form label
    $wp_customize->add_setting('form_label', array(
        'default' => __('Form label', 'simple_child'),
        'transport' => 'refresh',
    ));


    $wp_customize->add_control('form_label', array(
        'label' => __('Title for subscribe form', 'simple_child'),
        'section' => 'home_page',
        'settings' => 'form_label',
        'type' => 'text',
    ));


    //Footer. Add settings for the copyright field
    $wp_customize->add_setting('footer_copy', array(
        'default' => __('Copyright text', 'simple_child'),
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('footer_copy', array(
        'label' => __('Footer copyright text', 'simple_child'),
        'section' => 'home_page',
        'settings' => 'footer_copy',
        'type' => 'textarea',
    ));



}

add_action( 'customize_register', 'child_customize_register' );