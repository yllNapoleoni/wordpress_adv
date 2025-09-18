<?php

function wpdevs_customizer( $wp_customize){
    $wp_customize->add_section{
        'sec_copyright',
        array(
            'title'=>'Copyright Setting',
            'description'=>'Copyright Settings'
        )
    };

    $wp_customize->add_settings(
        'set_copyright',
        array(
            'type'=>'theme_mod',
            'default'=>'Copyright X - All Rights Reserved',
            'sanitize_callback'=>'sanitize_text_field'
        )
        );
        $wp_customize->add_control(
            'set_copyright',
            array(
                'label'=>'Copyright information',
                'descripiton'=>'Please, type your copyright here',
                'section'=>'sec_copyright',
                'type'=>'text'
            )
            );
}

add_action('customize_register','wpdevs_customizer');



?>