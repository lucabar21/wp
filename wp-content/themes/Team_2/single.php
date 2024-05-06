<?php get_header(); ?>

<div class="container">
    <div class="row">
        <h1 class="mt-5"><?php the_title(); ?></h1>
            <small class="text-muted">
            <?php $categories = get_the_category();
            if (!empty($categories)) {
            foreach ($categories as $category) {
             echo '<a href="' . esc_url(get_category_link($category->term_id)) . '" class="badge bg-dark text-light px-3 ms-2 me-1 arc-bdg">' . esc_html($category->name) . '</a>';
             }
            }
            ?> | <?php echo get_the_date(); ?>
            </small>

            <div class="mt-2 mb-0">
            <a href="javascript:history.back()" class="arc-indietro "><i class="bi bi-backspace-fill px-1"></i>Torna
            Indietro</a>
            </div>

            <img src="<?= get_the_post_thumbnail_url() ?: wp_get_attachment_url(); ?>" class="w-75 mt-4"
                            alt="<?php the_title(); ?>">

                            <p class="card-text mt-2"><?php the_content(); ?></p>
    </div>
</div>








<?php get_footer(); ?>