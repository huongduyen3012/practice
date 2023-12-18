<?php
$categories = get_the_category();
?>
<nav aria-label="breadcrumb">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php bloginfo('url'); ?>">Trang chủ</a></li>
            <li class="breadcrumb-item active" aria-current="page">\
                <?php echo $categories[0]->name; ?>
            </li>
        </ol>
    </div>
</nav>
<?php
if(in_category('news')) {
    ?>
    <main id="content">
        <div class="container">
            <?php if(have_posts()) {
                while(have_posts()) {
                    the_post(); ?>
                    <h1 class="entry-title"><span>
                            <?php the_title(); ?>
                        </span></h1>
                    <div>
                        <?php the_content(); ?>
                    </div>
                <?php }
            } ?>
            <div class="related-article">
                <h2 class="block-title line-left mb-40">Bài viết cùng chuyên mục</h2>
                <div class="row">

                    <div class="col-12 col-sm-12 col-md-6">
                        <article class="article-group">
                            <div class="row">
                                <div class="col-6 col-sm-4 col-md-4">
                                    <a
                                        href="https://www.vitinhducthanh.com/tin-tuc/bo-mach-chu-amd-b550-ra-mat-vao-thang-6.html">
                                        <img class="img-fluid"
                                            src="https://www.vitinhducthanh.com/wp-content/uploads/2020/11/2-CPU-Moi-cua-AMD-se-gia-nhap-dong-Ryzen-3000-1.png">
                                    </a>
                                </div>
                                <div class="col-6 col-sm-8 col-md-8">
                                    <a
                                        href="https://www.vitinhducthanh.com/tin-tuc/bo-mach-chu-amd-b550-ra-mat-vao-thang-6.html">
                                        <h2 class="article-title">Bo mạch chủ AMD B550 ra mắt vào tháng 6</h2>
                                    </a>
                                    <p class="article-date"><i class="fa fa-calendar" aria-hidden="true"></i> 04/11/2020</p>
                                    <p class="article-excerpt d-none d-sm-block">Đầu năm nay, có thông tin rằng AMD sẽ bắt
                                        đầu sản xuất hàng loạt chipset B550 và A520 vào...</p>
                                </div>
                            </div>
                        </article>
                    </div>


                    <div class="col-12 col-sm-12 col-md-6">
                        <article class="article-group">
                            <div class="row">
                                <div class="col-6 col-sm-4 col-md-4">
                                    <a
                                        href="https://www.vitinhducthanh.com/tin-tuc/card-nvidia-geforce-rtx-3000-series-se-ra-mat-vao-thang-9-2020.html">
                                        <img class="img-fluid"
                                            src="https://www.vitinhducthanh.com/wp-content/uploads/2020/11/nvidia-rtx-3080-ti-1140x570-1-1024x512-1.jpg">
                                    </a>
                                </div>
                                <div class="col-6 col-sm-8 col-md-8">
                                    <a
                                        href="https://www.vitinhducthanh.com/tin-tuc/card-nvidia-geforce-rtx-3000-series-se-ra-mat-vao-thang-9-2020.html">
                                        <h2 class="article-title">Card NVIDIA GeForce RTX-3000 series Sẽ ra mắt vào tháng
                                            9/2020</h2>
                                    </a>
                                    <p class="article-date"><i class="fa fa-calendar" aria-hidden="true"></i> 04/11/2020</p>
                                    <p class="article-excerpt d-none d-sm-block">Như chúng ta đã biết NVIDIA đã giới thiệu
                                        cấu trúc Ampere sử dụng trên card đồ họa mới của...</p>
                                </div>
                            </div>
                        </article>
                    </div>

                </div>
            </div>
        </div>
    </main>
<?php } else { ?>
    <main id="content">
        <div class="container">
            <?php if(have_posts()) {
                while(have_posts()) {
                    the_post(); ?>
                    <article class="">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-4">
                                <div id="custCarousel" class="carousel slide" data-ride="carousel" align="center">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <?php the_post_thumbnail('full', array('class' => 'd-block ư-100')); ?>

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
                                                <?php the_post_thumbnail('full', array('class' => 'img-fluid')); ?>
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
                <?php }
            } ?>

            <div class="related-article">
                <h2 class="block-title line-left mb-40">Bài viết cùng chuyên mục</h2>
                <div class="row">

                    <div class="col-12 col-sm-12 col-md-6">
                        <article class="article-group">
                            <div class="row">
                                <div class="col-6 col-sm-4 col-md-4">
                                    <a
                                        href="https://www.vitinhducthanh.com/laptop/laptop-cu/dell-n3543-15-6%e2%80%b3-hd-i3-5005u-4gb-128gb-ssd-hd-5500-win10-2-3-kg.html">
                                        <img class="img-fluid"
                                            src="https://www.vitinhducthanh.com/wp-content/uploads/2021/03/163776945_739347550307219_5776892411450789554_n.jpg">
                                    </a>
                                </div>
                                <div class="col-6 col-sm-8 col-md-8">
                                    <a
                                        href="https://www.vitinhducthanh.com/laptop/laptop-cu/dell-n3543-15-6%e2%80%b3-hd-i3-5005u-4gb-128gb-ssd-hd-5500-win10-2-3-kg.html">
                                        <h2 class="article-title">DELL N3543 (15.6″ HD/I3 5005U/4GB/128GB SSD/HD
                                            5500/WIN10/2.3 KG)</h2>
                                    </a>
                                    <p class="article-date">Giá: <span>Liên hệ</span></p>
                                    <p class="article-excerpt d-none d-sm-block">– CPU: Intel Core i3 5005U – Màn hình:
                                        15.6″ – RAM: 1 x 4GB DDR3L 1600MHz – Đồ họa:...</p>
                                </div>
                            </div>
                        </article>
                    </div>


                    <div class="col-12 col-sm-12 col-md-6">
                        <article class="article-group">
                            <div class="row">
                                <div class="col-6 col-sm-4 col-md-4">
                                    <a
                                        href="https://www.vitinhducthanh.com/laptop/laptop-cu/dell-latitude-3540-15-6-hd-i3-4030u-4gb-128gb-ssd-hd-4400-win10-2-3-kg.html">
                                        <img class="img-fluid"
                                            src="https://www.vitinhducthanh.com/wp-content/uploads/2021/03/163435067_267930188278925_7180064895480892607_n.jpg">
                                    </a>
                                </div>
                                <div class="col-6 col-sm-8 col-md-8">
                                    <a
                                        href="https://www.vitinhducthanh.com/laptop/laptop-cu/dell-latitude-3540-15-6-hd-i3-4030u-4gb-128gb-ssd-hd-4400-win10-2-3-kg.html">
                                        <h2 class="article-title">DELL LATITUDE 3540 (15.6″ HD/I3 4030U/4GB/128GB SSD/HD
                                            4400/WIN10/2.3 KG)</h2>
                                    </a>
                                    <p class="article-date">Giá: <span>Liên hệ</span></p>
                                    <p class="article-excerpt d-none d-sm-block">– CPU: Intel Core i3 4030U – Màn hình:
                                        15.6″ – RAM: 1 x 4GB DDR3L 1600MHz – Đồ họa:...</p>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php } ?>