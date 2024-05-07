<div class="d-flex flex-column gap-3">
    <h4 style="font-weight:700; text-align:center; font-size:1.3rem">Per un soggiorno indimenticabile, ti consigliamo:
    </h4>
    <?php
    $promo = array(
        'post_type' => 'promotions',
        'category__in' => wp_get_post_categories($args['post_id']),
    );
    $custom_promo = new WP_Query($promo);

    if ($custom_promo->have_posts()):
        while ($custom_promo->have_posts()):
            $custom_promo->the_post(); ?>
            <div class="col-auto sb-card">
                <img src="<?= get_the_post_thumbnail_url() ?: wp_get_attachment_url(); ?>" alt="card">
                <div class="sb-text-mini">
                    <p><?php the_title(); ?></p>
                    <a href="<?php the_permalink(); ?>">
                        <div>Scopri di più</div>
                    </a>
                </div>
            </div>
        <?php endwhile;
        wp_reset_postdata();
    endif; ?>

</div>