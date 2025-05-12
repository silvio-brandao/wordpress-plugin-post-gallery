<?php
/**
 * Plugin Name: Post Gallery 
 * Description: Display posts or news in a customized masonry style
 * Version: 1.2
 * Author: Silvio Brandao
 */

if (!defined('ABSPATH')) exit;

// Shortcode principal com grid completo
add_shortcode('events_home_grid', function () {
    ob_start(); ?>
    <div class="events-grid">
        <div class="left-column">
            <?php echo do_shortcode('[highlighted_event]'); ?>
        </div>
        <div class="right-column">
            <?php echo do_shortcode('[side_event_1]'); ?>
            <?php echo do_shortcode('[side_event_2]'); ?>
        </div>
    </div>
    <?php
    return ob_get_clean();
});

// Shortcode for the highlighted post (first news)
function shortcode_highlighted_event() {
    $query = new WP_Query(array(
        'post_type' => 'post',
        'posts_per_page' => 1,
        'category_name'  => 'corporate-meetings'
    ));
    if ($query->have_posts()) {
        $query->the_post();
        ob_start();
        ?>
        <a href="<?php the_permalink(); ?>" class="event-box" style="background-image: url('<?php the_post_thumbnail_url(); ?>')">
            <div class="event-overlay">
                <div class="event-overlay-blur"></div>
                <div class="event-text">
                    <h3><?php the_title(); ?></h3>
                    <p><?php echo get_the_date('d/m/Y'); ?></p>
                </div>
            </div>
        </a>
        <?php
        wp_reset_postdata();
        return ob_get_clean();
    }
}
add_shortcode('highlighted_event', 'shortcode_highlighted_event');

// Helper function for the side events
function render_event_offset($offset) {
    $query = new WP_Query(array(
        'post_type' => 'post',
        'posts_per_page' => 1,
        'offset' => $offset,
        'category_name'  => 'corporate-meetings'
    ));
    if ($query->have_posts()) {
        $query->the_post();
        ob_start();
        ?>
        <a href="<?php the_permalink(); ?>" class="event-box" style="background-image: url('<?php the_post_thumbnail_url(); ?>')">
            <div class="event-overlay">
                <div class="event-overlay-blur"></div>
                <div class="event-text">
                    <h3><?php the_title(); ?></h3>
                    <p><?php echo get_the_date('d/m/Y'); ?></p>
                </div>
            </div>
        </a>
        <?php
        wp_reset_postdata();
        return ob_get_clean();
    }
}

add_shortcode('side_event_1', function () {
    return render_event_offset(1);
});
add_shortcode('side_event_2', function () {
    return render_event_offset(2);
});
