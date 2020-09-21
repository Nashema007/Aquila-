<?php

/**
 * Header Template
 * 
 * @package Aquila
 */
?>
<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php 

    /**
     *  Checks backward compatibility of function
     * @param function_exists('function_name')
     *  
     */
    if(function_exists('wp_body_open')){
        wp_body_open();
    } 
 ?>
<header>Header</header>