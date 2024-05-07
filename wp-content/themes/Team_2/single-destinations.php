<?php

get_header();
the_post(); ?>

<div class="my-4 mx-3">
    <div class="row">
        <div class="col-12 col-md-9">
            <div class="card-dest">
                <img src="<?= get_the_post_thumbnail_url() ?: wp_get_attachment_url(); ?>" class="w-100"
                                alt="<?php the_title(); ?>">
                <h3 class="card-title p-3"><?php single_post_title(); ?></h3>
                <div class="mx-3">
                    <hr>
                    <div class="card-subtitle d-flex flex-row">
                        <div class="rounded-circle overflow-hidden me-2">
                            <?php echo get_avatar(get_the_author_meta('ID'), 50); ?></div>
                        <div class="d-flex flex-column justify-content-evenly">
                            <div class="autore">
                                <?php
                                the_author(); ?></div>
                            <div class="d-flex flex-row">
                                <p class="subdate me-2"><?php the_time('j F Y'); ?></p>
                                <div class="align-items-center subdate">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-right me-1" viewBox="0 0 16 16">
                                        <path d="M2 1a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h9.586a2 2 0 0 1 1.414.586l2 2V2a1 1 0 0 0-1-1zm12-1a2 2 0 0 1 2 2v12.793a.5.5 0 0 1-.854.353l-2.853-2.853a1 1 0 0 0-.707-.293H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2z" />
                                    </svg><span><?php comments_number('0', '1', '%'); ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                </div>
                <div class="card-text p-3"><?php the_content(); ?></div>
            </div>
        </div>
        <div class="col-12 col-md-3">
            <div class="card"> <?php get_sidebar('primary'); ?>
            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-12 col-md-9">
            <div class="card p-3">
                <div class="form-width">
                    <?php comments_template(); ?></div>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
