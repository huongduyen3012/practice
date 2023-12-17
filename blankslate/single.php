<?php
$category = get_the_category();
get_header(); ?>
<nav aria-label="breadcrumb">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php bloginfo('url') ?>">Trang chủ</a></li>
            <li class="breadcrumb-item"><a href="<?php bloginfo('url') ?>">
                    <?php echo $category[0]->name; ?>
                </a></li>
        </ol>
    </div>
</nav>
<?php
if (in_category('News')) {
    ?>
    <main id="content">
        <div class="container">

            <?php if (have_posts()) {
                while (have_posts()) {
                    the_post();
                    ?>
                    <h1 class="entry-title">
                        <?php the_title(); ?>
                    </h1>
                    <div class="entry-content">
                        <?php the_content(); ?>
                    </div>
                <?php }
            } ?>
            <?php
            $news = new WP_Query(array(
                'category_name' => 'News',
                'posts_per_page' => 2
            ));
            if ($news->have_posts()) {

                ?>
                <div class="related-article">
                    <h2 class="block-title line-left mb-40">Bài viết cùng chuyên mục</h2>
                    <div class="row">
                        <?php
                        while ($news->have_posts()) {
                            $news->the_post();

                            ?>
                            <div class="col-12 col-sm-12 col-md-6">
                                <article class="article-group">
                                    <div class="row">
                                        <div class="col-6 col-sm-4 col-md-4">
                                            <a href="<?php the_permalink(); ?>">
                                                <div>
                                                    <?php the_post_thumbnail('full', array('class' => 'img-fluid')); ?>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-6 col-sm-8 col-md-8">
                                            <a href="<?php the_permalink(); ?>">
                                                <h2 class="article-title">
                                                    <?php the_title(); ?>
                                                </h2>
                                            </a>
                                            <p class="article-date"><i class="fa fa-calendar" aria-hidden="true"></i>
                                                <?php echo get_the_date() ?>
                                            </p>
                                            <p class="article-excerpt d-none d-sm-block">
                                                <?php the_excerpt(); ?>
                                            </p>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <?php
                        }
                        wp_reset_postdata();

                        ?>
                    </div>
                </div>
            <?php } ?>
        </div>
    </main>
<?php } else {
    ?>
    <main id="content">
        <div class="container">
            <?php if (have_posts()) {
                while (have_posts()) {
                    the_post();
                }
            } ?>
            <article id="post-488"
                class="post-488 post type-post status-publish format-standard has-post-thumbnail hentry category-laptop-cu">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-4">

                        <div id="custCarousel" class="carousel slide" data-ride="carousel" align="center">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <?php the_post_thumbnail('full', array('class' => 'd-block w-100')) ?>
                                </div>

                            </div>
                            <a class="carousel-control-prev" href="#custCarousel" data-slide="prev"> <span
                                    class="carousel-control-prev-icon"></span> </a>
                            <a class="carousel-control-next" href="#custCarousel" data-slide="next"> <span
                                    class="carousel-control-next-icon"></span> </a>
                            <ol class="carousel-indicators list-inline">
                                <li class="list-inline-item active">
                                    <a id="carousel-selector-0" class="selected" data-slide-to="0"
                                        data-target="#custCarousel">
                                        <?php the_post_thumbnail('full', array('class' => 'img-fluid')) ?>
                                    </a>
                                </li>

                            </ol>
                        </div>

                    </div>

                    <div class="col-12 col-sm-12 col-md-8">
                        <h1 class="entry-title">
                            <?php the_title(); ?>
                        </h1>
                        <div class="entry-price">Giá: <span>Liên hệ</span></div>
                        <div class="entry-content">
                            <?php the_content(); ?>
                        </div>
                        <div class="promotion-groups">
                            <div class="promotion-title">Khuyến mãi</div>
                            <div class="promotion-detail">Tặng chuột ko dây và túi chống sốc<br>
                                Bảo hành: 03 tháng</div>
                        </div>
                    </div>
                </div>
                <div class="detail-product">
                    <h2 class="product-sub-title"><span>MÔ TẢ SẢN PHẨM</span></h2>
                </div>
            </article>
            <?php
            if (have_posts()) {
                ?>
                <div class="related-article">
                    <h2 class="block-title line-left mb-40">Bài viết cùng chuyên mục</h2>
                    <div class="row">
                        <?php
                        while (have_posts()) {
                            the_post();
                            ?>
                            <div class="col-12 col-sm-12 col-md-6">
                                <article class="article-group">
                                    <div class="row">
                                        <div class="col-6 col-sm-4 col-md-4">
                                            <a href="<?php the_permalink(); ?>">
                                                <?php the_post_thumbnail('full', array('class' => 'img-fluid')); ?>
                                            </a>
                                        </div>
                                        <div class="col-6 col-sm-8 col-md-8">
                                            <a href="<?php the_permalink(); ?>">
                                                <h2 class="article-title">
                                                    <?php the_title(); ?>
                                                </h2>
                                            </a>
                                            <p class="article-date">Giá: <span>Liên hệ</span></p>
                                            <p class="article-excerpt d-none d-sm-block">
                                                <?php the_excerpt(); ?>
                                            </p>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        <?php }
                        wp_reset_postdata();
                        ?>
                    </div>
                </div>
            <?php } ?>
        </div>
    </main>
<?php } ?>
<?php get_footer(); ?>