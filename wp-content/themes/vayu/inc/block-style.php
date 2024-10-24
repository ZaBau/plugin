<?php
/**
 * Block Styles
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_style/
 *
 * @package vayu
 * @since 1.0.0
 */
 
if (function_exists('register_block_style')) {
    /**
     * Register block styles.
     *
     * @since 1.0.0
     *
     * @return void
     */
    function vayu_register_block_styles()
    {
        register_block_style(
            'core/group',
            array(
                'name'  => 'vayu-boxshadow',
                'label' => __('Box Shadow', 'vayu')
            )
        );
        register_block_style(
            'core/group',
            array(
                'name'  => 'vayu-boxshadow-medium',
                'label' => __('Box Shadow Medium', 'vayu')
            )
        );
        register_block_style(
            'core/group',
            array(
                'name'  => 'vayu-boxshadow-large',
                'label' => __('Box Shadow Larger', 'vayu')
            )
        );
    }
    add_action('init', 'vayu_register_block_styles');
}