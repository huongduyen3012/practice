<!DOCTYPE html>
<html lang="en-US" class="chrome">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/solid.min.css"
        integrity="sha512-tk4nGrLxft4l30r9ETuejLU0a3d7LwMzj0eXjzc16JQj+5U1IeVoCuGLObRDc3+eQMUcEQY1RIDPGvuA7SNQ2w=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
    <title>Vi tính Đức Thành </title>

    <script src="https://www.vitinhducthanh.com/wp-includes/js/wp-emoji-release.min.js?ver=6.2" type="text/javascript"
        defer=""></script>
    <link rel="stylesheet" id="wp-block-library-css"
        href="https://www.vitinhducthanh.com/wp-includes/css/dist/block-library/style.min.css?ver=6.2" type="text/css"
        media="all">
    <link rel="stylesheet" id="classic-theme-styles-css"
        href="https://www.vitinhducthanh.com/wp-includes/css/classic-themes.min.css?ver=6.2" type="text/css"
        media="all">
    
    <link rel="stylesheet" id="blankslate-style-css"
        href="<?php echo get_theme_file_uri('style.css')?>" type="text/css" media="all">

   
    <link rel="https://api.w.org/" href="https://www.vitinhducthanh.com/wp-json/">
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://www.vitinhducthanh.com/xmlrpc.php?rsd">
    <link rel="wlwmanifest" type="application/wlwmanifest+xml"
        href="https://www.vitinhducthanh.com/wp-includes/wlwmanifest.xml">
    <meta name="generator" content="WordPress 6.2">
    <link rel="icon" href="https://www.vitinhducthanh.com/wp-content/themes/ducthanh/images/logo.ico" type="image/png">
</head>

<body class="home blog">
    <header>
        
        <div class="middle-header">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-5">
                        <!-- Logo -->
                        <a href="<?php bloginfo('url') ?>">
                            <div class="media logo-groups">
                                <img src="<?php echo get_theme_file_uri('/img/logo.png') ?>" class="mr-3"
                                    alt="Vi tính - laptop - camera Đức Thành">
                                <div class="media-body">
                                    <h5 class="mt-0">VI TÍNH - LAPTOP - CAMERA</h5>
                                    <p>ĐỨC THÀNH</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-md-3">
                        <!-- Search form -->
                        <form action="<?php bloginfo('url') ?>" method="GET">
                            <div class="input-group search-groups">
                                <input type="text" class="form-control" name="s" placeholder="Nhập từ khóa">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary" type="submit">Tìm</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-12 col-md-4 righ-logo-groups">
                        <div class="righ-logo">
                            <i class="fa fa-phone"></i> <a href="tel:0969609639"><b>0969.609.639</b></a> - Mr. Đức
                        </div>
                        <div>
                            <i class="fa fa-clock-o"></i> Mở cửa từ 8h - 19h các ngày trong tuần
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-header">
            <div class="container">
                <div class="row">
                    
                    <div class="d-none d-md-block col-md-8 offset-md-4">
                        <div class="left-menu">
                            <?php wp_nav_menu(
                                array(
                                    "theme_loction" => "main-menu",
                                    "menu_class" => "left-menu",
                                    "menu_id" => "menu-top-menu",
                                    "container" => ""
                                )
                            )
                                ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4 menu-position">
                    <div class="title-menu-groups mobile-show d-block d-md-none">
                        <i class="fa fa-align-justify mgr-5"></i> <span>DANH MỤC SẢN PHẨM</span>
                    </div>
                    <div class="title-menu-groups d-none d-md-block">
                        <i class="fa fa-align-justify mgr-5"></i> <span>DANH MỤC SẢN PHẨM</span>
                    </div>
                    <!-- * -->
                    <div class="
                        <?php
                        if(is_home()) {
                            echo "menu-groups home d-none d-md-block";
                        } else {
                            echo "menu-groups";
                        }
                        ?>">
                        <?php wp_nav_menu(array(
                            'theme_location' => 'category_menu',
                            'menu_class' => 'main-menu',
                            'menu_id' => 'menu-main-menu',
                            'container' => ''
                        )) ?>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-8">
                <div id="header-slider" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#header-slider" data-slide-to="0" class="active"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://www.vitinhducthanh.com/wp-content/uploads/2020/11/68756711_2440219026072164_5018162852897226752_n.jpg"
                                class="d-block w-100" alt="Chào đón tân sinh viên 2020">
                           
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#header-slider" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#header-slider" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <!-- end col -->
        </div>
        </div>
    </header>
    <nav class="main-mobile-menu-group">
        <div class="mobile-hide">×</div>
        <!-- * -->
        <?php wp_nav_menu(array(
            'theme_location' => 'category_menu',
            'menu_class' => 'mobile-menu',
            'menu_id' => 'main-menu-mobile',
            'container' => ''
        )) ?>
        <script type="text/javascript">
            jQuery(function () {
                jQuery(".mobile-show").click(function () {
                    jQuery(".main-mobile-menu-group").toggle("fast");
                });
                jQuery(".mobile-hide").click(function () {
                    jQuery(".main-mobile-menu-group").toggle("fast");
                });
            })
        </script>
    </nav>