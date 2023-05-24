<article id="<?php the_ID() ?>">
<?php
if(has_post_thumbnail()) {
    the_post_thumbnail('large');
}
the_title("<a href='".esc_url(get_permalink()) ."'>", "</a>");
the_excerpt();
?>
</article>
