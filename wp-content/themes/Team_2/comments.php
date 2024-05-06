<?php
if (comments_open() || get_comments_number()) :
    comment_form();
    if (have_comments()) :
?>
        <ol class="comment-list">
            <?php
            wp_list_comments();
            ?>
        </ol>
    <?php
    else :
    ?>
        <p>Non ci sono commenti.</p>
    <?php
    endif;
else :
    ?>
    <p>I commenti sono chiusi per questa pagina.</p>
<?php
endif;
?>