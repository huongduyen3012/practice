<?php get_header(); ?>
<nav aria-lable="breadcrum">
    <div class="container">
        <ol class="breadcrum">
            <li class="breadcrum-item"><a href="<?php bloginfo('url') ?>">Trang chủ</a></li>
            <li class="breadcrum-item active" aria-current="page">
                <?php the_title(); ?>
            </li>
        </ol>
    </div>
</nav>
<main id="content">
    <div class="container">
        <?php
        if (have_posts()) {
            while (have_posts()) {
                the_post();
                ?>
                <h1 class="entry-title"><span>
                        <?php the_title() ?>
                    </span></h1>
                <div>
                    <?php the_content(); ?>
                </div>
                <?php
            }
        }
        ?>
    </div>
</main>
<?php get_footer(); ?>