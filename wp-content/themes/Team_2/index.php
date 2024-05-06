<?php get_header(); ?>

<div class="container">
    <div class="row mt-5 justify-content-center">
        <h1>Blog</h1>
        <form class="d-flex w-50" role="search" method="post" action="<?php echo esc_url(home_url('/')); ?>">
            <input class="form-control me-2" type="search" placeholder="Cerca articoli..." aria-label="Search" name="s">
            <button class="arc-btn">Cerca</button>
        </form>
    </div>

    <!-- Card -->
    <div class="row">
        <?php
        if (have_posts()):
            while (have_posts()):
                the_post(); ?>
                <div class="col-12 col-md-4">
                    <div class="card my-5">
                        <img src="<?= get_the_post_thumbnail_url() ?: wp_get_attachment_url(); ?>" class="card-img-top"
                            alt="<?php the_title(); ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php the_title(); ?></h5>
                            <?php if (is_single()): ?>
                                <p class="card-text"><?php the_content(); ?></p>
                            <?php endif; ?>
                            <p class="card-text">
                                <small class="text-muted">
                                    <?php $categories = get_the_category();
                                    if (!empty($categories)) {
                                        foreach ($categories as $category) {
                                            echo '<a href="' . esc_url(get_category_link($category->term_id)) . '" class="badge bg-dark text-light px-3 me-1 arc-bdg">' . esc_html($category->name) . '</a>';
                                        }
                                    }
                                    ?> | <?php echo get_the_date(); ?>
                                </small>
                            </p>
                            <a href="<?php the_permalink(); ?>"><button class="w-100 arc-btn">Read</button></a>
                        </div>
                    </div>
                </div>
            <?php endwhile;
        else:
            echo '<p>Nessun articolo trovato.</p>';
        endif;
        ?>
    </div>
</div>
</div>

<?php get_footer(); ?>