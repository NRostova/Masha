<?php
if(have_posts()){
    while(have_posts()){
        the_post();
        get_template_part('template-parts/content/homepage');
    }
}
else{
     get_template_part('template-parts/content/content','none');

}
?>