<?php
add_action("after_setup_theme", "blankslate_setup");
function blankslate_setup() {
    add_theme_support("post-thumnails");
    register_nav_menus(
        array(
            "main-menu" => "Main Menu",
            "category-menu" => "Category Menu",
            "footer-menu" => "Footer Menu"
        )
    );
}

add_action( 'widgets_init', 'wpdocs_register_widgets' );
function wpdocs_register_widgets() {
	register_widget( 'My_Widget' );
}


class My_Widget extends WP_Widget {
   
    public function __construct() {
        parent::__construct(
            'custom-category', // Base ID
            'Custom category', // Name
            array('description' => __('Custom Category Widget', 'text_domain'))
        );
    }
  
    public function widget($args, $instance) {
        extract($args);
        $title = !empty($instance['title'] ? $instance['title'] : "Default Title");
        $categoryName = $instance['categoryName'];
        ?>
        <div class="san-pham-group mt-25">
            <div class="title-background">
                <h2>
                    <?php echo $title; ?>
                </h2>
            </div>
            <div class="row">
                <?php
                $laptops = new WP_query(
                    array(
                        "category_name" => $categoryName,
                        "posts_per_page" => 4
                    )
                );
                if($laptops->have_posts()) {

                    while($laptops->have_posts()) {
                        $laptops->the_post();
                        ?>
                        <div class="col-6 col-sm-6 col-md-3">
                            <article class="group-product">
                                <a href="<?php the_permalink() ?>">
                                    <div class="group-info">
                                        <?php the_post_thumbnail("full", array("class" => "img-fluid")) ?>
                                    </div>
                                    <div class="info-hover">
                                        <?php the_content(); ?>
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
                }
                ?>
            </div>
        </div>
        <?php


    }
    /**
     * Back-end widget form.
     */
    public function form($instance) {
        $title = !empty($instance['title'] ? $instance['title'] : "");
        ?>
        <p>
            <label for="<?php echo $this->get_field_id('title'); ?>">
                Title
            </label>
            <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>"
                name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('categoryName'); ?>">
                Select Category
            </label>
            <select class="widefat" id="<?php echo $this->get_field_id('categoryName'); ?>"
                name="<?php echo $this->get_field_name('categoryName'); ?>">
                <?php
                $categories = get_categories(array(
                    'orderby' => 'name',
                    'order' => 'ASC',
                    'hide-empty' => false,
                ));

                foreach($categories as $category) {
                    ?>
                    <option value="<?php echo $category->slug ?>" <?php echo $category->slug == $instance
                        ['categoryName'] ? 'selected' : '';
                        ?>> <?php echo $category->name ?>
                    </option>
                <?php } ?>
            </select>
        </p>
        <?php
    }

    /**
     * Sanitize widget form values as they are saved.
     *
     * @see WP_Widget::update()
     *
     * @param array $new_instance Values just sent to be saved.
     * @param array $old_instance Previously saved values from database.
     *
     * @return array Updated safe values to be saved.
     */
    public function update($new_instance, $old_instance) {
        $instance = array();
        $instance['title'] = (!empty($new_instance['title'])) ? strip_tags($new_instance['title']) : '';
        $instance['categoryName'] = (!empty($new_instance['categoryName'])) ? strip_tags($new_instance['categoryName']) : '';
        return $instance;
    }
} 
$my_widget = new My_Widget();

add_action('widgets_init', 'my_register_sidebars');
function my_register_sidebars() {
    register_sidebar(
        array(
            'id' => 'sidebar',
            'name' => __('Primary Sidebar'),
            'description' => __('A short description of the sidebar.'),
            'before_widget' => '',
            'after_widget' => '',
            'before_title' => '',
            'after_title' => '',
        )
    );
}
?>