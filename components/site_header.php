<?php 
    require '../nisgaa/functions/security_headers.php';
    require '../nisgaa/functions/site.php';
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en"
    lang="en" dir="ltr">
    <head profile="http://www.w3.org/1999/xhtml/vocab">
        <meta charset="UTF-8">
        <meta http-equiv="Content-type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="google-site-verification" content="AoSEh84a-NthX9s-5lUi7X8yrNXhh9J5LFtlncT5lJI">

        <?php

            if(isset($url[2]) && !empty($url[2]) && $page_name == 'news' && $url[1] != 'category'){
                $tag = $site->postInformation($database, $url[2]);
                $tag_title = $tag['post_title'];
                $tag_desc = $tag['post_desc'];
                $tag_image = "https://www.nisgaa.bc.ca/images/thumbnails/".$tag['post_thumbnail'];
            } else {
                $tag_title = "Nathan Barton Elementary School";
                $tag_desc = "Nathan Barton Elementary School";
                $tag_image = "https://www.nisgaa.bc.ca/images/thumbnails/post_thumbnail.jpg";
            }

        ?>

        <!-- Primary Meta Tags -->
        <title><?php echo trim($tag_title); ?></title>
        <meta name="type" content="article">
        <meta name="title" content="<?php echo trim($tag_title); ?>">
        <meta name="description" content="<?php echo trim($tag_desc); ?>">
        <meta name="url" content="https://nbes.nisgaa.bc.ca">
        <meta property="image" content="<?php echo trim($tag_image); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="robots" content="all,follow">

        <!-- Open Graph / Facebook -->
        <meta property="og:image" content="<?php echo $tag_image; ?>">

        <!-- Twitter -->
        <meta property="twitter:card" content="summary_large_image">
        <meta property="twitter:url" content="https://nbes.nisgaa.bc.ca">
        <meta property="twitter:title" content="<?php echo $tag_title; ?>">
        <meta property="twitter:description" content="<?php echo $tag_desc; ?>">
        <meta property="twitter:image" content="<?php echo $tag_image; ?>">

        <!-- Bootstrap CSS-->
        <link rel="stylesheet" href="/plugins/bootstrap-v4/css/bootstrap.min.css">
        <!-- Font Awesome CSS -->
        <link rel="stylesheet" href="/plugins/font-awesome/css/font-awesome.min.css">
        <!-- Google fonts - Roboto-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,700">
        <!-- Theme stylesheet-->
        <link rel="stylesheet" href="/css/themes/style.red.min.css" id="theme-stylesheet">
        <!-- Custom stylesheet - for your changes-->
        <link rel="stylesheet" href="/css/custom.min.css">
        <link rel="stylesheet" href="/css/responsive-font.min.css">
        <!-- Favicon and apple touch icons-->
        <link rel="icon" href="/nisgaa-icon.png" type="image/x-icon">

        <!-- Tweaks for older IEs-->
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

        <!-- JQuery Init -->
        <script src="/plugins/jquery/jquery.min.js"></script>

    </head>
    <body>
        <!-- Page Loader -->
        <?php require '../nisgaa/components/page_loader.php'; ?>
        <!-- #END# Page Loader -->
        <div id="all" style ="overflow-x: hidden;">