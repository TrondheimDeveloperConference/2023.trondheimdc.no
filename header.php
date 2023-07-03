<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
<link rel="stylesheet" type="text/css" media="all" href="<?= bloginfo('template_url') ?>/css/theme.css?v=38">
<script src="<?php bloginfo("template_url") ?>/js/script.js?v=1"></script>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>

<body <?php body_class($_POST['body_class']) ?>>

<header>
    <div class="container">
        <div class="row">

            <div class="col-6 col-lg-4 logo">
                <a href="<?php bloginfo("url"); ?>">&nbsp;</a>
            </div>      

            <div class="col-6 d-block d-lg-none toggle"></div>

            <div class="col-12 col-lg-8 main-menu">
                <?php wp_nav_menu([ "theme_location" => "main", "container" => "" ]); ?>    
            </div>

        </div>
    </div>
</header>

<div class="container main">
    <div class="row">
        <div class="col-12">