<?php get_header(); ?>
<nav aria-label="breadcrumb">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php bloginfo('url') ?>">Trang chủ</a></li>
            <li class="breadcrumb-item active" aria-current="page">Tìm kiếm</li>
        </ol>
    </div>
</nav>

<main id="content">
    <div class="container">
        <h1 class="entry-title"><span>Kết quả tìm kiếm:</span>
            <?php echo get_search_query(); ?>
        </h1>

        <div class="row san-pham-group d-flex align-items-stretch">
            <?php if(have_posts()) { ?>
                <?php while(have_posts()) {
                    the_post(); ?>
                    <div class="col-12 col-sm-6 col-md-3">
                        <article class="news-item d-flex flex-column h-100">
                            <a href="<?php the_permalink(); ?>" class="flex-grow-1">
                                <div class="news-excerpt">
                                    <?php if(has_post_thumbnail()) { ?>
                                        <?php the_post_thumbnail('thumbnail', array('class' => 'img-fluid')); ?>
                                    <?php } ?>
                                </div>
                                <div class="news-sub-title">
                                    <?php the_title(); ?>
                                </div>
                            </a>

                            <a class="btn btn-outline-primary mt-auto" href="<?php the_permalink(); ?>" role="button">Xem
                                thêm</a>
                        </article>
                    </div>
                <?php } ?>
            <?php } else { ?>
                <p>
                    <?php esc_html_e('Không có kết quả phù hợp.'); ?>
                </p>
            <?php } ?>
        </div>
    </div>
</main>
<?php get_footer(); ?>