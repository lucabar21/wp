<?php get_header(); ?>

  <div class="container">
    <div class="row mt-5 justify-content-center">
    <form class="d-flex w-50" role="search">
      <input class="form-control me-2" type="search" placeholder="Cerca articoli..." aria-label="Search">
      <button type="submit" class="arc-btn">Cerca</button>
    </form>
    </div>

    <!-- Card -->
    <div class="row">
        <div class="col-12 col-md-9 mt-5">
            <h1 class="mt-2"><?php the_archive_title(); ?></h1>
            <div class="row g-4">
                <?php while (have_posts()) : the_post(); ?>
                    <div class="col">
                        <div class="card h-100 rounded mt-5">
                            <img src="<?= get_the_post_thumbnail_url() ?: wp_get_attachment_url(); ?>" class="card-img-top" alt="<?php the_title(); ?>">
                            <div class="card-body">
                                <h5 class="card-title"><?php the_title(); ?></h5>
                                <p class="card-text"><?php the_excerpt(); ?></p>
                                <a href="<?php the_permalink(); ?>" class="btn btn-primary">Read</a>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
            <?php echo paginate_links(); ?>
        </div>

        <div class="col-12 col-md-3">
            <?php get_sidebar(); ?>
        </div>
    </div>
  </div>

<?php get_footer(); ?>