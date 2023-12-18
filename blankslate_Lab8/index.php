<?php get_header(); ?>
<main class="">
    <div class="container slogan-group">
        <div class="row">
            <div class="col-12 col-sm-6 col-md-3">
                <div class="slogan">
                    <div class="media">
                        <img src="https://www.vitinhducthanh.com/wp-content/themes/ducthanh/images/gia-ca-canh-tranh.png"
                            class="align-self-center mr-3" alt="">
                        <div class="media-body">
                            <h5 class="">Giá cả cạnh tranh</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-3">
                <div class="slogan">
                    <div class="media">
                        <img src="https://www.vitinhducthanh.com/wp-content/themes/ducthanh/images/san-pham-chinh-hang.png"
                            class="align-self-center mr-3" alt="">
                        <div class="media-body">
                            <h5 class="">Sản phẩm chính hãng</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-3">
                <div class="slogan">
                    <div class="media">
                        <img src="https://www.vitinhducthanh.com/wp-content/themes/ducthanh/images/hang-hoa-da-dang.png"
                            class="align-self-center mr-3" alt="">
                        <div class="media-body">
                            <h5 class="">Hàng hóa đa dạng</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-3">
                <div class="slogan">
                    <div class="media">
                        <img src="https://www.vitinhducthanh.com/wp-content/themes/ducthanh/images/dich-vu-toi-uu.png"
                            class="align-self-center mr-3" alt="">
                        <div class="media-body">
                            <h5 class="">Dịch vụ tối ưu</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="san-pham-group mt-25">
            <div class="title-background">
                <h2>SẢN PHẨM BÁN CHẠY</h2>
            </div>
            <div class="row">
                <div class="col-6 col-sm-6 col-md-3">
                    <article class="group-product">
                        <a href="https://www.vitinhducthanh.com/gears/chuot-khong-day-dareu-lm115g.html">
                            <div class="group-info">
                                <img class="img-fluid"
                                    src="https://www.vitinhducthanh.com/wp-content/uploads/2020/11/e727498842f74786e8b27b305aaaa2b1-300x300.jpg">
                                <div class="info-hover"></div>
                            </div>
                            <div class="san-pham-title">CHUỘT KHÔNG DÂY DAREU LM115G</div>
                            <div class="san-pham-price">Giá: <span>170.000</span></div>
                        </a>
                    </article>
                </div>
                <div class="col-6 col-sm-6 col-md-3">
                    <article class="group-product">
                        <a href="https://www.vitinhducthanh.com/gears/chuot-newmen-n3000-led-gaming.html">
                            <div class="group-info">
                                <img class="img-fluid"
                                    src="https://www.vitinhducthanh.com/wp-content/uploads/2020/11/c3a31dc53a483209f780a8f4d952e18b-300x300.jpg">
                                <div class="info-hover"></div>
                            </div>
                            <div class="san-pham-title">Chuột NEWMEN N3000 LED GAMING</div>
                            <div class="san-pham-price">Giá: <span>360.000</span></div>
                        </a>
                    </article>
                </div>
                <div class="col-6 col-sm-6 col-md-3">
                    <article class="group-product">
                        <a href="https://www.vitinhducthanh.com/gears/tai-nghe-gaming-bosston-hs-200-led.html">
                            <div class="group-info">
                                <img class="img-fluid"
                                    src="https://www.vitinhducthanh.com/wp-content/uploads/2020/11/Tai-Nghe-Bosston-HS200-LED-Chuyen-Mau-1314-300x300.jpg">
                                <div class="info-hover"></div>
                            </div>
                            <div class="san-pham-title">Tai Nghe Gaming Bosston HS-200 Led</div>
                            <div class="san-pham-price">Giá: <span>280.000</span></div>
                        </a>
                    </article>
                </div>
                <div class="col-6 col-sm-6 col-md-3">
                    <article class="group-product">
                        <a href="https://www.vitinhducthanh.com/gears/tai-nghe-zidli-zh6-led-2-1-jack-3-5.html">
                            <div class="group-info">
                                <img class="img-fluid"
                                    src="https://www.vitinhducthanh.com/wp-content/uploads/2020/11/41768_tai-nghe-zidli-zh6-black-1-300x300.jpg">
                                <div class="info-hover"></div>
                            </div>
                            <div class="san-pham-title">Tai Nghe ZIDLI ZH6 LED ( 2.1 ) Jack 3.5</div>
                            <div class="san-pham-price">Giá: <span>230.000</span></div>
                        </a>
                    </article>
                </div>
            </div>
        </div>
        <div class="loi-cam-on">
            Vi tính <b>ĐỨC THÀNH</b> xin cảm ơn Quý khách đã tin tưởng và sử dụng sản phẩm của chúng tôi
        </div>
        <!-- Laptop -->
        <?php dynamic_sidebar('sidebar'); ?>
        <?php
        $laptops = new WP_query(
            array(
                "category_name" => "Laptop",
                "posts_per_page" => 4
            )
        );
        if($laptops->have_posts()) {
            ?>
            <div class="san-pham-group mt-25">
                <div class="title-background">
                    <a href="https://www.vitinhducthanh.com/./laptop">
                        <h2>LAPTOP</h2>
                    </a>
                </div>
                <div class="row">
                    <?php
                    while($laptops->have_posts()) {
                        $laptops->the_post();
                        ?>
                        <div class="col-6 col-sm-6 col-md-3">
                            <article class="group-product">
                                <a href="<?php the_permalink() ?>">
                                    <div class="group-info">
                                        <?php the_post_thumbnail("full", array("class" => "img-fluid")) ?>
                                    </div>
                                    <div class="san-pham-title">
                                        <?php the_title() ?>
                                    </div>
                                    <div class="san-pham-price">Giá: <span>Liên hệ</span></div>
                                </a>
                            </article>
                        </div>
                        <?php
                    }
                    wp_reset_postdata();
                    ?>
                <?php } ?>

            </div>
        </div>
        <!-- * -->
        <?php $maybo = new WP_Query(
            array(
                "category_name" => "may-bo",
                "posts_per_page" => 4

            )
        );

        if($maybo->have_posts()) {
            $category_url = home_url('/category/may-bo/');
            ?>
            <div class="san-pham-group mt-25">
                <div class="title-background">
                    <a href="https://www.vitinhducthanh.com/./may-bo">
                        <h2>MÁY BỘ</h2>
                    </a>
                </div>
                <div class="row">
                    <?php
                    while($maybo->have_posts()) {
                        $maybo->the_post(); ?>
                        <div class="col-6 col-sm-6 col-md-3">
                            <article class="group-product">
                                <a href="<?php the_permalink(); ?>">
                                    <div class="group-info">
                                        <?php the_post_thumbnail("full", array(
                                            "class" => "img-fluid"
                                        )
                                        );
                                        ?>
                                    </div>
                                    <div class="san-pham-title">
                                        <?php the_title() ?>
                                    </div>
                                    <div class="san-pham-price">Giá: <span>Liên hệ</span></div>
                                </a>
                            </article>
                        </div>
                        <?php
                    }
                    wp_reset_postdata();
                    ?>

                </div>
            </div>
            <?php
        }
        ?>
    </div>
    <!-- Gears -->
    <div class="san-pham-group mt-25">
        <div class="title-background">
            <a href="https://www.vitinhducthanh.com/./gears">
                <h2>GEARS</h2>
            </a>
        </div>
        <div class="row">
            <div class="col-6 col-sm-6 col-md-3">
                <article class="group-product">
                    <a href="https://www.vitinhducthanh.com/gears/ban-phim-co-e-dra-ek311.html">
                        <div class="group-info">
                            <img class="img-fluid"
                                src="https://www.vitinhducthanh.com/wp-content/uploads/2020/11/38276_e_dra_ek311_ha1-300x300.jpg">
                            <div class="info-hover"></div>
                        </div>
                        <div class="san-pham-title">Bàn phím cơ E-Dra EK311</div>
                        <div class="san-pham-price">Giá: <span>690.000</span></div>
                    </a>
                </article>
            </div>
            <div class="col-6 col-sm-6 col-md-3">
                <article class="group-product">
                    <a href="https://www.vitinhducthanh.com/gears/ban-phim-co-e-dra-ek3104.html">
                        <div class="group-info">
                            <img class="img-fluid"
                                src="https://www.vitinhducthanh.com/wp-content/uploads/2020/11/azaudio-e-dra-ek-3104-rgb-blue-switch-300x300.jpg">
                            <div class="info-hover"></div>
                        </div>
                        <div class="san-pham-title">Bàn phím cơ E-Dra EK3104</div>
                        <div class="san-pham-price">Giá: <span>690.000</span></div>
                    </a>
                </article>
            </div>
            <div class="col-6 col-sm-6 col-md-3">
                <article class="group-product">
                    <a href="https://www.vitinhducthanh.com/gears/ban-phim-co-newmen-gm310.html">
                        <div class="group-info">
                            <img class="img-fluid"
                                src="https://www.vitinhducthanh.com/wp-content/uploads/2020/11/form-up-sp__91260_zoom-3-300x300.jpg">
                            <div class="info-hover"></div>
                        </div>
                        <div class="san-pham-title">Bàn phím cơ Newmen GM310</div>
                        <div class="san-pham-price">Giá: <span>690.000</span></div>
                    </a>
                </article>
            </div>
            <div class="col-6 col-sm-6 col-md-3">
                <article class="group-product">
                    <a href="https://www.vitinhducthanh.com/gears/ban-phim-co-dareu-ek169-blue-switch.html">
                        <div class="group-info">
                            <img class="img-fluid"
                                src="https://www.vitinhducthanh.com/wp-content/uploads/2020/11/34948_ek169_logo-300x300.jpg">
                            <div class="info-hover"></div>
                        </div>
                        <div class="san-pham-title">Bàn phím cơ Dareu EK169</div>
                        <div class="san-pham-price">Giá: <span>690.000</span></div>
                    </a>
                </article>
            </div>
            <div class="col-6 col-sm-6 col-md-3">
                <article class="group-product">
                    <a href="https://www.vitinhducthanh.com/gears/chuot-ajazz-aj100.html">
                        <div class="group-info">
                            <img class="img-fluid"
                                src="https://www.vitinhducthanh.com/wp-content/uploads/2020/11/2fb085aeb9f7f5c15d57f9b0f92d4e0d-300x300.jpg">
                            <div class="info-hover"></div>
                        </div>
                        <div class="san-pham-title">CHUỘT AJAZZ AJ100</div>
                        <div class="san-pham-price">Giá: <span>350.000</span></div>
                    </a>
                </article>
            </div>
            <div class="col-6 col-sm-6 col-md-3">
                <article class="group-product">
                    <a href="https://www.vitinhducthanh.com/gears/chuot-e-dra-em6502-led-rgb.html">
                        <div class="group-info">
                            <img class="img-fluid"
                                src="https://www.vitinhducthanh.com/wp-content/uploads/2020/11/51492_chuot_choi_game_e_dra_em6502_pro_0000_1-300x300.jpg">
                            <div class="info-hover"></div>
                        </div>
                        <div class="san-pham-title">CHUỘT E-DRA EM6502 LED RGB GAMING</div>
                        <div class="san-pham-price">Giá: <span>390.000</span></div>
                    </a>
                </article>
            </div>
            <div class="col-6 col-sm-6 col-md-3">
                <article class="group-product">
                    <a href="https://www.vitinhducthanh.com/gears/chuot-newmen-n3000-led-gaming.html">
                        <div class="group-info">
                            <img class="img-fluid"
                                src="https://www.vitinhducthanh.com/wp-content/uploads/2020/11/c3a31dc53a483209f780a8f4d952e18b-300x300.jpg">
                            <div class="info-hover"></div>
                        </div>
                        <div class="san-pham-title">Chuột NEWMEN N3000 LED GAMING</div>
                        <div class="san-pham-price">Giá: <span>360.000</span></div>
                    </a>
                </article>
            </div>
            <div class="col-6 col-sm-6 col-md-3">
                <article class="group-product">
                    <a href="https://www.vitinhducthanh.com/gears/tai-nghe-over-ear-eaglend-f2.html">
                        <div class="group-info">
                            <img class="img-fluid"
                                src="https://www.vitinhducthanh.com/wp-content/uploads/2020/11/tai-nghe-eaglend-f2_1-1-300x300.jpg">
                            <div class="info-hover"></div>
                        </div>
                        <div class="san-pham-title">Tai nghe Over-ear EAGLEND F2 USB 7.1</div>
                        <div class="san-pham-price">Giá: <span>580.000</span></div>
                    </a>
                </article>
            </div>
        </div>
    </div>
    <!-- Bàn ghế Gaming -->
    <div class="san-pham-group mt-25">
        <div class="title-background">
            <a href="https://www.vitinhducthanh.com/./ban-ghe-gaming">
                <h2>BÀN GHẾ GAMING</h2>
            </a>
        </div>
        <div class="row">
            <div class="col-6 col-sm-6 col-md-3">
                <article class="group-product">
                    <a href="https://www.vitinhducthanh.com/ban-ghe-gaming/ghe-gaming-e-dra-citizen-den.html">
                        <div class="group-info">
                            <img class="img-fluid"
                                src="https://www.vitinhducthanh.com/wp-content/uploads/2021/03/152319bf915b118cddf8d40ea0dace49.jpg">
                            <div class="info-hover"></div>
                        </div>
                        <div class="san-pham-title">GHẾ GAMING E-DRA CITIZEN ( Đen )</div>
                        <div class="san-pham-price">Giá: <span>2.100.000</span></div>
                    </a>
                </article>
            </div>
            <div class="col-6 col-sm-6 col-md-3">
                <article class="group-product">
                    <a
                        href="https://www.vitinhducthanh.com/ban-ghe-gaming/ghe-gaming-e-dra-citizen-egc200-trang-hong.html">
                        <div class="group-info">
                            <img class="img-fluid"
                                src="https://www.vitinhducthanh.com/wp-content/uploads/2021/03/1.png">
                            <div class="info-hover"></div>
                        </div>
                        <div class="san-pham-title">Ghế Gaming E-Dra Citizen (Trắng/Hồng )</div>
                        <div class="san-pham-price">Giá: <span>1.900.000</span></div>
                    </a>
                </article>
            </div>
            <div class="col-6 col-sm-6 col-md-3">
                <article class="group-product">
                    <a
                        href="https://www.vitinhducthanh.com/ban-ghe-gaming/ban-chu-z-gaming-e-dra-transformer-chan-khuyet.html">
                        <div class="group-info">
                            <img class="img-fluid"
                                src="https://www.vitinhducthanh.com/wp-content/uploads/2021/03/ban-gaming-edra-1.jpg">
                            <div class="info-hover"></div>
                        </div>
                        <div class="san-pham-title">Bàn chữ Z Gaming E-Dra Transformer ( Chân Khuyết )</div>
                        <div class="san-pham-price">Giá: <span>1.350.000</span></div>
                    </a>
                </article>
            </div>
            <div class="col-6 col-sm-6 col-md-3">
                <article class="group-product">
                    <a href="https://www.vitinhducthanh.com/ban-ghe-gaming/ban-chu-z-gaming.html">
                        <div class="group-info">
                            <img class="img-fluid"
                                src="https://www.vitinhducthanh.com/wp-content/uploads/2021/03/images-3.jpg">
                            <div class="info-hover"></div>
                        </div>
                        <div class="san-pham-title">Bàn chữ Z Gaming</div>
                        <div class="san-pham-price">Giá: <span>1.190.000</span></div>
                    </a>
                </article>
            </div>
        </div>
    </div>
    <!-- Camera -->
    <div class="san-pham-group mt-25">
        <div class="title-background">
            <a href="https://www.vitinhducthanh.com/./camera">
                <h2>CAMERA</h2>
            </a>
        </div>
        <div class="row">
            <div class="col-6 col-sm-6 col-md-3">
                <article class="group-product">
                    <a href="https://www.vitinhducthanh.com/camera/bo-hikvision-4-camera-2-0mp.html">
                        <div class="group-info">
                            <img class="img-fluid"
                                src="https://www.vitinhducthanh.com/wp-content/uploads/2021/01/DS-7204HQHI-K1-1_yaru-1v.jpg">
                            <div class="info-hover"></div>
                        </div>
                        <div class="san-pham-title">BỘ HIKVISION 4 CAMERA 2.0MP</div>
                        <div class="san-pham-price">Giá: <span>7.000.000</span></div>
                    </a>
                </article>
            </div>
            <div class="col-6 col-sm-6 col-md-3">
                <article class="group-product">
                    <a href="https://www.vitinhducthanh.com/camera/bo-hikvision-8-camera-2-0mp.html">
                        <div class="group-info">
                            <img class="img-fluid"
                                src="https://www.vitinhducthanh.com/wp-content/uploads/2021/01/455f62bc382ec712fe004dc096129f49.jpg">
                            <div class="info-hover"></div>
                        </div>
                        <div class="san-pham-title">BỘ HIKVISION 8 CAMERA 2.0MP</div>
                        <div class="san-pham-price">Giá: <span>12.000.000</span></div>
                    </a>
                </article>
            </div>
            <div class="col-6 col-sm-6 col-md-3">
                <article class="group-product">
                    <a href="https://www.vitinhducthanh.com/camera/bo-hikvision-4-camera-1-0mp.html">
                        <div class="group-info">
                            <img class="img-fluid"
                                src="https://www.vitinhducthanh.com/wp-content/uploads/2021/01/tron-bo-camera-hikvision-hdtvi1-4.png">
                            <div class="info-hover"></div>
                        </div>
                        <div class="san-pham-title">BỘ HIKVISION 4 CAMERA 1.0MP</div>
                        <div class="san-pham-price">Giá: <span>4.700.000</span></div>
                    </a>
                </article>
            </div>
            <div class="col-6 col-sm-6 col-md-3">
                <article class="group-product">
                    <a href="https://www.vitinhducthanh.com/camera/bo-hikvision-8-camera-1-0mp.html">
                        <div class="group-info">
                            <img class="img-fluid"
                                src="https://www.vitinhducthanh.com/wp-content/uploads/2021/01/Tron-bo-8-than-dome-camera-hikvision-720p.png">
                            <div class="info-hover"></div>
                        </div>
                        <div class="san-pham-title">BỘ HIKVISION 8 CAMERA 1.0MP</div>
                        <div class="san-pham-price">Giá: <span>8.400.000</span></div>
                    </a>
                </article>
            </div>
        </div>
    </div>
    </div>
    <!-- * -->
    <?php $news = new WP_Query(
        array(
            "category_name" => "news",
            "posts_per_page" => 3

        )
    );

    if($news->have_posts()) {
        $category_url = home_url('/category/news/');
        ?>
        <div class="news">
            <div class="container">
                <a href="https://www.vitinhducthanh.com/./tin-tuc">
                    <h3 class="news-title"><span>TIN TỨC</span></h3>
                </a>
                <div class="row">
                    <?php
                    while($news->have_posts()) {
                        $news->the_post(); ?>
                        <div class="col-12 col-sm-6 col-md-4">
                            <article class="news-item">
                                <a href="<?php the_permalink(); ?>">
                                    <div>

                                        <?php the_post_thumbnail("full", array(
                                            "class" => "img-fluid"
                                        )
                                        ); ?>
                                    </div>
                                    <div class="news-sub-title">
                                        <?php the_title() ?>
                                    </div>
                                </a>
                                <div class="news-excerpt">Intel Core i9-10900K thuộc dòng vi xử lý cho phép mở khoá hệ số
                                    nhân, hỗ trợ ép xung, xung...</div>
                                <a class="btn btn-outline-primary" href="<?php the_permalink(); ?>" role="button">Xem thêm</a>
                            </article>
                        </div>
                        <?php
                    }
                    wp_reset_postdata();
                    ?>

                </div>
            </div>
        </div>
        <?php
    }
    ?>
</main>
<?php get_footer(); ?>