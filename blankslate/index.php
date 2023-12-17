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
        <?php
        $laptop = new WP_Query(array(
            'category_name' => 'Laptop',
            'posts_per_page' => 4
        ));
        if ($laptop->have_posts()) {
            ?>
            <div class="san-pham-group mt-25">
                <div class="title-background"><a href="https://www.vitinhducthanh.com/./laptop">
                        <h2>LAPTOP</h2>
                    </a></div>
                <div class="row">
                    <?php
                    while ($laptop->have_posts()) {
                        $laptop->the_post();
                        ?>
                        <div class="col-6 col-sm-6 col-md-3">
                            <article class="group-product">
                                <a href="<?php echo the_permalink(); ?>">
                                    <div class="group-info">
                                        <?php the_post_thumbnail('full', array('class' => 'img-fluid')); ?>

                                    </div>
                                    <div class="san-pham-title">
                                        <?php the_title(); ?>
                                    </div>
                                    <div class="san-pham-price">Giá: <span>Liên hệ</span></div>
                                </a>
                            </article>
                        </div>
                    <?php }
                    wp_reset_postdata();
                    ?>
                </div>
            </div>
        <?php } ?>

        <?php
        $pc = new WP_Query(array(
            'category_name' => 'PC',
            'posts_per_page' => 4
        ));
        if ($pc->have_posts()) {

            ?>
            <div class="san-pham-group mt-25">
                <div class="title-background"><a href="https://www.vitinhducthanh.com/./may-bo">
                        <h2>MÁY BỘ</h2>
                    </a></div>
                <div class="row">
                    <?php
                    while ($pc->have_posts()) {
                        $pc->the_post();
                        ?>
                        <div class="col-6 col-sm-6 col-md-3">
                            <article class="group-product">
                                <a href="<?php the_permalink(); ?>">
                                    <div class="group-info">
                                        <?php the_post_thumbnail('full', array('class' => 'img-fluid')); ?>
                                    </div>
                                    <div class="san-pham-title">
                                        <?php the_title(); ?>
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
        <?php } ?>
        <!-- Màn hình -->
        <?php
        $screen = new WP_Query(array(
            'category_name' => 'Screen',
            'posts_per_page' => 4
        ));
        if ($screen->have_posts()) {

            ?>
            <div class="san-pham-group mt-25">
                <div class="title-background"><a href="https://www.vitinhducthanh.com/./man-hinh">
                        <h2>MÀN HÌNH</h2>
                    </a></div>
                <div class="row">
                    <?php
                    while ($screen->have_posts()) {
                        $screen->the_post();

                        ?>
                        <div class="col-6 col-sm-6 col-md-3">
                            <article class="group-product">
                                <a
                                    href="<?php the_permalink(); ?>">
                                    <div class="group-info">
                                        <?php the_post_thumbnail('full', array('class' => 'img-fluid')); ?>
                                    </div>
                                    <div class="san-pham-title"><?php the_title(); ?>
                                    </div>
                                    <div class="san-pham-price">Giá: <span>6.500.000</span></div>
                                </a>
                            </article>
                        </div>
                    <?php
                    }
                    wp_reset_postdata(); ?>
                </div>
            </div>
        <?php } ?>
        <!-- Tin tuc -->
        <?php
        $news = new WP_Query(array(
            'category_name' => 'News',
            'posts_per_page' => 3
        ));
        if ($news->have_posts()) {

            ?>
            <div class="news">
                <div class="container">
                    <a href="https://www.vitinhducthanh.com/./tin-tuc">
                        <h3 class="news-title"><span>TIN TỨC</span></h3>
                    </a>
                    <div class="row">
                        <?php
                        while ($news->have_posts()) {
                            $news->the_post();

                            ?>
                            <div class="col-12 col-sm-6 col-md-4">
                                <article class="news-item">
                                    <a href="<?php the_permalink(); ?>">
                                        <div>
                                            <?php the_post_thumbnail('full', array('class' => 'img-fluid')); ?>
                                        </div>
                                        <div class="news-sub-title">
                                            <?php the_title(); ?>
                                        </div>
                                    </a>
                                    <div class="news-excerpt">
                                        <?php the_excerpt(); ?>
                                    </div>
                                    <a class="btn btn-outline-primary" href="<?php the_permalink(); ?>" role="button">Xem
                                        thêm</a>
                                </article>
                            </div>
                            <?php
                        }
                        wp_reset_postdata();
                        ?>
                    </div>
                </div>
            </div>
        <?php } ?>
</main>
<?php get_footer(); ?>