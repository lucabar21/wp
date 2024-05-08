<?php
$commenter = wp_get_current_commenter();
$req = get_option( 'require_name_email' );
$aria_req = ( $req ? " aria-required='true'" : '' );
$args = array(
	'comment_field' => '<div class="form-floating mb-3"><label for="floatingTextarea">' . _x( 'Comment', 'noun' ) . '</label><textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" name="comment" cols="45" rows="8" aria-required="true"></textarea></div>',
    'fields' => apply_filters( 'comment_form_default_fields', array(

    'author' =>
      '<div class="input-group mb-3">' .
      '<input id="author" name="author" type="text" class="form-control" placeholder="Nome" value="' . esc_attr( $commenter['comment_author'] ) .
      '" size="30"' . $aria_req . ' /></div>',

    'email' =>
      '<div class="input-group mb-3">' .
      '<input id="email" name="email" type="text" class="form-control" placeholder="Email" value="' . esc_attr(  $commenter['comment_author_email'] ) .
      '" size="30"' . $aria_req . ' /></div>',

    'url' =>
      '<div class="input-group mb-3">' .
      '<input id="url" name="url" type="text" class="form-control" placeholder="Sito Web" value="' . esc_attr( $commenter['comment_author_url'] ) .
      '" size="30" /></div>'
    ))

);
if (comments_open() || get_comments_number()) :
    comment_form($args);
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