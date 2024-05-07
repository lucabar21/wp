<?php get_header(); ?>
<!-- HERO SECTION -->
<div class="hp-section my-4 mx-3">
    <?php
    $args = array(
        'post_type' => 'destinations',
        'posts_per_page' => 1,
        'order' => 'DESC' //
    );
    $custom_query = new WP_Query($args);

    if ($custom_query->have_posts()):
        while ($custom_query->have_posts()):
            $custom_query->the_post(); ?>
            <img class="hero-img" src="<?= get_the_post_thumbnail_url() ?: 'http://placedog.net/455'; ?>" alt="hero">
            <div class="hero-text">
                <h2 class="text-shadow"><?php the_title(); ?></h2>
                <p class="p-didascalia"><?php
                $excerpt = get_the_excerpt();
                $max_lines = 3;
                $excerpt_lines = substr_count($excerpt, "\n") + 1;
                if ($excerpt_lines > $max_lines) {
                    $lines = explode("\n", wordwrap($excerpt, 1000));
                    $excerpt = implode("\n", array_slice($lines, 0, $max_lines)) . '...';
                }
                ?></p>
                <p><?php echo $excerpt; ?></p>
                <a href="<?php the_permalink(); ?>"><button>Scopri di più</button></a>
            </div>
        <?php endwhile;
        wp_reset_postdata();
    endif; ?>
</div>
<!-- PROMO -->
<div class="hp-bot-section-3 my-4 mx-3">
    <div id="promo-img"><img src="<?= site_url("/wp-content/uploads/2024/05/promo.png") ?>" alt="promo"></div>
    <div id="promo-btn">
        <h5>APPROFITTA DEI NOSTRI IMPERDIBILI SCONTI VIAGGIO!</h5>
        <div class="arc-btn">
            
            <a href="<?= site_url("/coupon")?>">COUPON 50%</a>
        </div>
    </div>
</div>

<!-- LATEST POST SECTION -->
<div class="justify-content-center my-4 mx-3 past">
    <div class="hp-section-2">
        <h5>Dai un'occhiata alle destinazioni che abbiamo proposto le settimane precedenti.</h5>
        <div class="post-container">
            <?php
            $args = array(
                'post_type' => 'destinations',
                'posts_per_page' => 4
            );
            $custom_query = new WP_Query($args);

            if ($custom_query->have_posts()):
                while ($custom_query->have_posts()):
                    $custom_query->the_post(); ?>
                    <div class="col-auto hp-card">
                        <img class="home-card-shadow" src="<?= get_the_post_thumbnail_url() ?: wp_get_attachment_url(); ?>" alt="card">
                        <div class="hero-text-mini">
                            <h4 class="text-shadow"><?php the_title(); ?></h4>
                            <a href="<?php the_permalink(); ?>"><button class="">Scopri di più</button></a>
                        </div>
                    </div>
                <?php endwhile;
                wp_reset_postdata();
            endif; ?>
        </div>

    </div>
</div>
<!-- CALL TO ACTION FORM -->
<div class="hp-top-section-3 my-4 mx-3">
    <h5 class="my-3">Consigliaci nuove destinazioni che vorresti presentassimo nelle prossime settimane!</h5>
    <form>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Inserisci il tuo nome</label>
            <input type="text" class="form-control" id="exampleFormControlInput1">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Inserisci il tuo indirizzo email</label>
            <input type="email" class="form-control" id="exampleFormControlInput1">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Dacci un consiglio...</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <div class="form-btn">Invia</div>
    </form>
</div>
<?php get_footer(); ?>