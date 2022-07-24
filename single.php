<?php

while(have_posts()) {
    the_post(); ?> 
    <h2><?php the_title(); ?></h2>
    <p><?php the_content(); ?></p>
    <?php
}
?> 

<!-- the_content()
the_title()
the_permalink(); 
the_post();
have_posts();  -->
