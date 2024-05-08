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
                        <span class="position-absolute top-0 end-0 bg-danger discount-badge p-1 z-1 text-white">-50%</span>
                        <img src="<?= get_the_post_thumbnail_url() ?: wp_get_attachment_url(); ?>" class="card-img-top"
                            alt="...">
                        <div class="card-body d-flex flex-column justify-content-center align-items-center">
                            <h5 class="card-title"><?php the_title(); ?></h5>

                            <a style="margin-top:auto" href="<?php the_permalink(); ?>"><button>Scopri di più</button></a>
                        </div>
                    </div>
                </div>
            <?php endwhile;
            wp_reset_postdata();
        endif; ?>
    </div>
</div>

<?php get_footer();