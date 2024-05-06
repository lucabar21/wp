<?php get_header(); ?>

<div class="container">
    <div class="row mt-5 justify-content-center">
        <form class="d-flex w-50" role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
            <input class="form-control me-2" type="search" placeholder="Cerca articoli..." aria-label="Search" name="s">
            <input type="hidden" name="category_name" value="<?php echo get_query_var('category_name'); ?>">

            <button class="arc-btn" type="submit">Cerca</button>
        </form>
    </div>


    <div class="row">
        <div class="col-12 col-md-12 mt-5">
            <h1 class="mt-2">Risultati della ricerca</h1>

            <a href="javascript:history.back()" class="arc-indietro mb-3"><i class="bi bi-backspace-fill px-1"></i>Torna
                Indietro</a>
            <div class="row g-4">
                <?php if (have_posts()):
                    while (have_posts()):
                        the_post(); ?>
                        <div class="col-12 col-md-4">
                            <div class="card h-100 mt-5">
                                <img src="<?= get_the_post_thumbnail_url() ?: wp_get_attachment_url(); ?>" class="card-img-top"
                                    alt="<?php the_title(); ?>">
                                <div class="card-body">
                                    <h5 class="card-title"><?php the_title(); ?></h5>
                                    <p class="card-text"><?php the_excerpt(); ?></p>
                                    <a href="<?php the_permalink(); ?>"><button class="arc-btn">Read</button></a>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; else: ?>
                    <p>Nessun articolo trovato.</p>
                <?php endif; ?>
            </div>
            <?php echo paginate_links(); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>