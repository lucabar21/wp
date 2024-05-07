<?php get_header(); ?>

<div class="container">
    <h2 class="text-center mt-3">Scopri posti nuovi con il 50% di sconto, solo per oggi!</h2>

    <div class="row">
        <?php
        $args = array(
            'post_type' => 'destinations',
            'posts_per_page' => 4
        );
        $custom_query = new WP_Query($args);
    
        if ($custom_query->have_posts()):
            while ($custom_query->have_posts()):
                $custom_query->the_post(); ?>
                <div class="col-3">
                    <div class="card my-3 position-relative">
                        <span class="position-absolute top-0 end-0 bg-danger rounded-5 p-2 z-1">-50%</span>
                        <img src="<?= get_the_post_thumbnail_url() ?: wp_get_attachment_url(); ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php the_title(); ?></h5>
                            <p class="card-text"><?php the_content(); ?></p>
                            <a href="<?php the_permalink(); ?>"><button>Scopri di più</button></a>
                        </div>
                    </div>
                </div>
            <?php endwhile;
            wp_reset_postdata();
        endif; ?>
    </div>
</div>

<?php get_footer();