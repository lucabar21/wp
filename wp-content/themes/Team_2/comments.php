<?php
if (post_password_required()) {
    return;
}
?>
<div id="comments" class="comments-area">
    <?php if (have_comments()) : ?>
        <!-- Qui viene visualizzata la lista dei commenti -->
    <?php endif; // have_comments()  
    ?>
    <?php comment_form(); ?>
</div>