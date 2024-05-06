<?php get_header(); ?>

<div class="container">
    <div class="row mt-5 justify-content-center">
        <form class="d-flex w-50" role="search" method="post" action="<?php echo esc_url(home_url('/')); ?>">
            <input class="form-control me-2" type="search" placeholder="Cerca articoli..." aria-label="Search" name="s">
            <button class="arc-btn">Cerca</button>
        </form>
    </div>

    <!-- Card -->
    <div class="row">
        <div class="col-12 col-md-12 mt-5">
            <h1 class="mt-2"><?php the_archive_title(); ?></h1>
            <div class="row g-4">
                <?php
                if (have_posts()) :
                    while (have_posts()) : the_post(); ?>
                        <div class="col-12 col-md-4">
                            <div class="card h-100 mt-5">
                                <img src="<?= get_the_post_thumbnail_url() ?: wp_get_attachment_url(); ?>" class="card-img-top" alt="<?php the_title(); ?>">
                                <div class="card-body">
                                    <h5 class="card-title"><?php the_title(); ?></h5>
                                    <p class="card-text"><?php the_excerpt(); ?></p>
                                    <p class="card-text">
                                        <small class="text-muted">
                                            <?php $categories = get_the_category();
                                            if (!empty($categories)) {
                                                foreach ($categories as $category) {
                                                    echo '<a href="' . esc_url(get_category_link($category->term_id)) . '" class="badge bg-dark text-light px-2 me-1 arc-bdg">' . esc_html($category->name) . '</a>';
                                                }
                                            }
                                            ?> | <?php echo get_the_date(); ?>
                                        </small>
                                    </p>
                                    <a href="<?php the_permalink(); ?>"><button class="arc-btn">Read</button></a>
                                </div>
                            </div>
                        </div>
                <?php endwhile;
                else :
                    echo '<p>Nessun articolo trovato.</p>';
                endif;
                ?>
            </div>
            <?php echo paginate_links(); ?>
        </div>

        <div class="col-12 col-md-3">
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>