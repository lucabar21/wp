<?php

get_header();
the_post(); ?>

<div class="containe my-4 mx-3">
    <div class="row">
        <div class="col-12 col-md-9">
            <div class="card">
            </div>
        </div>
        <div class="col-12 col-md-3">
            <div class="card"> <?php get_sidebar() ?>
            </div>,,
        </div>
    </div>
</div>

<?php
get_footer();
