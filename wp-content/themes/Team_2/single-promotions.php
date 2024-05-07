<?php

get_header();
the_post(); ?>


<div class="my-4 mx-3">
    <div class="row justify-content-center">
        <div class="col-10">
            <div class="card-dest">
                <img src="<?= get_the_post_thumbnail_url() ?: wp_get_attachment_url(); ?>" class="w-100"
                    alt="<?php the_title(); ?>">
                <h3 class="card-title p-3"><?php single_post_title(); ?></h3>
                <div class="mx-3">
                    <hr>
                </div>
                <div class="card-text p-3"><?php the_content(); ?></div>
            </div>
        </div>
    </div>
</div>








<?php get_footer(); ?>