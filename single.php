<?php
get_header();
?>
<!-- Posts
=============================================== -->
<div id="posts">
<?php
if(have_posts()){
    while(have_posts()){
        the_post();
        the_content();
    }
}
?>
</div>
<?php
get_footer();
?>